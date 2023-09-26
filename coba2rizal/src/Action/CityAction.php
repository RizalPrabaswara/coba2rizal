<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use coba2rizal\Model\CityModel;
use coba2rizal\Provider\CityProvider;
use coba2rizal\Service\CityService;
use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpForbiddenException;

class CityAction extends InvokableAction
{
    protected $cityProvider;
    protected $cityService;

    public function __construct(CityProvider $cityProvider, CityService $cityService)
    {
        $this->cityProvider = $cityProvider;
        $this->cityService = $cityService;
    }

    public function httpGet(): ResponseInterface
    {
        $city_id = $this->getArgument("id", null);

        if (is_null($city_id)) {
            if ($this->getQuery("create", false)) {
                return $this->render("city/form", [
                    "layout" => [
                        "content_title" => "Add New City"
                    ],
                    "city" => new CityModel()
                ]);
            }
            $cities = $this->cityProvider->listCity();
            return $this->render("city/list", [
                "layout" => [
                    "content_title" => "City List"
                ],
                "cities" => $cities
            ]);
        }

        $city = $this->cityProvider->getCityById(intval($city_id));

        if (!$city->id) {
            throw new HttpForbiddenException($this->request);
        }

        if ($this->getQuery("delete", false)) {
            if ($this->cityService->remove($city)) {
                $this->view->flash()->set("success", "City Deleted");
            } else {
                $this->view->flash()->set("error", "Cannot delete city");
            }
            $redirect_url = $this->view->url("/city/list");
            return $this->response->withHeader("Location", $redirect_url);
        }

        return $this->render("city/form", [
            "layout" => [
                "content_title" => "Edit City"
            ],
            "city" => $city
        ]);
    }

    public function httpPost(): ResponseInterface
    {
        $data = (array)$this->request->getParsedBody();
        $city = new CityModel();

        $city->populate($data);
        $city = $this->cityService->save($city);

        if (!$city->id) {
            $this->view->flash()->set("warning", "Unable to save city data");
            return $this->response->withHeader("Location", "/city/list");
        }

        $this->view->flash()->set("success", "Data Updated");
        $redirect_url = $this->view->url(sprintf("/city/%d", $city->id));
        return $this->response->withHeader("Location", $redirect_url);
    }
}
