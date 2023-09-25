<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use coba2rizal\Model\ShelfModel;
use coba2rizal\Provider\ShelfProvider;
use coba2rizal\Service\ShelfService;
use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpForbiddenException;

class ShelfAction extends InvokableAction
{
    protected $shelfProvider;
    protected $shelfService;

    public function __construct(ShelfProvider $shelfProvider, ShelfService $shelfService)
    {
        $this->shelfProvider = $shelfProvider;
        $this->shelfService = $shelfService;
    }

    public function httpGet(): ResponseInterface
    {
        $shelf_id = $this->getArgument("id", null);

        if (is_null($shelf_id)) {
            if ($this->getQuery("create", false)) {
                return $this->render("shelf/form", [
                    "layout" => [
                        "content_title" => "Add New Shelf"
                    ],
                    "shelf" => new ShelfModel()
                ]);
            }

            $shelfs = $this->shelfProvider->listCity();
            return $this->render("shelf/list", [
                "layout" => [
                    "content_title" => "Shelf List"
                ],
                "shelfs" => $shelfs
            ]);
        }

        $shelf = $this->shelfProvider->getUserById(intval($shelf_id));

        if (!$shelf->id) {
            throw new HttpForbiddenException($this->request);
        }

        if ($this->getQuery("delete", false)) {
            if ($this->shelfService->remove($shelf)) {
                $this->view->flash()->set("success", "shelf Deleted");
            } else {
                $this->view->flash()->set("error", "Cannot delete shelf");
            }
            $redirect_url = $this->view->url("/shelf/list");
            return $this->response->withHeader("Location", $redirect_url);
        }

        return $this->render("shelf/form", [
            "layout" => [
                "content_title" => "Edit shelf"
            ],
            "shelf" => $shelf
        ]);
    }

    public function httpPost(): ResponseInterface
    {
        $data = (array)$this->request->getParsedBody();
        $shelf = new ShelfModel();

        $shelf->populate($data);
        $shelf = $this->shelfService->save($shelf);

        if (!$shelf->id) {
            $this->view->flash()->set("warning", "Unable to save shelf data");
            return $this->response->withHeader("Location", "/shelf/list");
        }

        $this->view->flash()->set("success", "Data Updated");
        $redirect_url = $this->view->url(sprintf("/shelf/%d", $shelf->id));
        return $this->response->withHeader("Location", $redirect_url);
    }
}
