<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Provider\BuildingProvider;
use coba2rizal\Service\BuildingService;
use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpForbiddenException;

class BuildingAction extends InvokableAction
{
    protected $buildingProvider;
    protected $buildingService;

    public function __construct(BuildingProvider $buildingProvider, BuildingService $buildingService)
    {
        $this->buildingProvider = $buildingProvider;
        $this->buildingService = $buildingService;
    }

    public function httpGet(): ResponseInterface
    {
        $building_id = $this->getArgument("id", null);

        if (is_null($building_id)) {
            if ($this->getQuery("create", false)) {
                return $this->render("building/form", [
                    "layout" => [
                        "content_title" => "Add New Building In This Form"
                    ],
                    "building" => new BuildingModel()
                ]);
            }

            $buildings = $this->buildingProvider->listBuilding();
            return $this->render("building/list", [
                "layout" => [
                    "content_title" => "Building List"
                ],
                "buildings" => $buildings
            ]);
        }

        $building = $this->buildingProvider->getBuildingById(intval($building_id));

        if (!$building->id) {
            throw new HttpForbiddenException($this->request);
        }

        if ($this->getQuery("delete", false)) {
            if ($this->buildingService->remove($building)) {
                $this->view->flash()->set("success", "Building Deleted");
            } else {
                $this->view->flash()->set("error", "Cannot delete building");
            }
            $redirect_url = $this->view->url("/building/list");
            return $this->response->withHeader("Location", $redirect_url);
        }

        return $this->render("building/form", [
            "layout" => [
                "content_title" => "Edit Building"
            ],
            "building" => $building
        ]);
    }

    public function httpPost(): ResponseInterface
    {
        $data = (array)$this->request->getParsedBody();
        $building = new BuildingModel();

        $building->populate($data);
        $building = $this->buildingService->save($building);

        if (!$building->id) {
            $this->view->flash()->set("warning", "Unable to save building data");
            return $this->response->withHeader("Location", "/building/list");
        }

        $this->view->flash()->set("success", "Data Updated");
        $redirect_url = $this->view->url(sprintf("/building/%d", $building->id));
        return $this->response->withHeader("Location", $redirect_url);
    }
}
