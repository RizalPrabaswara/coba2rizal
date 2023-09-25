<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use coba2rizal\Model\FloorModel;
use coba2rizal\Provider\FloorProvider;
use coba2rizal\Service\FloorService;
use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpForbiddenException;

class FloorAction extends InvokableAction
{
    protected $floorProvider;
    protected $floorService;

    public function __construct(FloorProvider $floorProvider, FloorService $floorService)
    {
        $this->floorProvider = $floorProvider;
        $this->floorService = $floorService;
    }

    public function httpGet(): ResponseInterface
    {
        $floor_id = $this->getArgument("id", null);

        if (is_null($floor_id)) {
            if ($this->getQuery("create", false)) {
                return $this->render("floor/form", [
                    "layout" => [
                        "content_title" => "Add New Floor"
                    ],
                    "floor" => new FloorModel()
                ]);
            }
            $floors = $this->floorProvider->listFloor();
            return $this->render("floor/list", [
                "layout" => [
                    "content_title" => "Floor List"
                ],
                "floors" => $floors
            ]);
        }

        $floor = $this->floorProvider->getFloorById(intval($floor_id));

        if (!$floor->id) {
            throw new HttpForbiddenException($this->request);
        }

        if ($this->getQuery("delete", false)) {
            if ($this->floorService->remove($floor)) {
                $this->view->flash()->set("success", "Floor Deleted");
            } else {
                $this->view->flash()->set("error", "Cannot delete floor");
            }
            $redirect_url = $this->view->url("/floor/list");
            return $this->response->withHeader("Location", $redirect_url);
        }

        return $this->render("floor/form", [
            "layout" => [
                "content_title" => "Edit floor"
            ],
            "floor" => $floor
        ]);
    }

    public function httpPost(): ResponseInterface
    {
        $data = (array)$this->request->getParsedBody();
        $floor = new FloorModel();

        $floor->populate($data);
        $floor = $this->floorService->save($floor);

        if (!$floor->id) {
            $this->view->flash()->set("warning", "Unable to save floor data");
            return $this->response->withHeader("Location", "/floor/list");
        }

        $this->view->flash()->set("success", "Data Updated");
        $redirect_url = $this->view->url(sprintf("/floor/%d", $floor->id));
        return $this->response->withHeader("Location", $redirect_url);
    }
}
