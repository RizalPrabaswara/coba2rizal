<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use coba2rizal\Model\RoomModel;
use coba2rizal\Provider\RoomProvider;
use coba2rizal\Service\RoomService;
use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpForbiddenException;

class RoomAction extends InvokableAction
{
    protected $roomProvider;
    protected $roomService;

    public function __construct(RoomProvider $roomProvider, RoomService $roomService)
    {
        $this->roomProvider = $roomProvider;
        $this->roomService = $roomService;
    }

    public function httpGet(): ResponseInterface
    {
        $room_id = $this->getArgument("id", null);

        if (is_null($room_id)) {
            if ($this->getQuery("create", false)) {
                return $this->render("room/form", [
                    "layout" => [
                        "content_title" => "Add New room"
                    ],
                    "room" => new RoomModel()
                ]);
            }
            $rooms = $this->roomProvider->listRoom();
            return $this->render("room/list", [
                "layout" => [
                    "content_title" => "City List"
                ],
                "rooms" => $rooms
            ]);
        }

        $room = $this->roomProvider->getRoomById(intval($room_id));

        if (!$room->id) {
            throw new HttpForbiddenException($this->request);
        }

        if ($this->getQuery("delete", false)) {
            if ($this->roomService->remove($room)) {
                $this->view->flash()->set("success", "Room Deleted");
            } else {
                $this->view->flash()->set("error", "Cannot delete room");
            }
            $redirect_url = $this->view->url("/room/list");
            return $this->response->withHeader("Location", $redirect_url);
        }

        return $this->render("room/form", [
            "layout" => [
                "content_title" => "Edit Room"
            ],
            "room" => $room
        ]);
    }

    public function httpPost(): ResponseInterface
    {
        $data = (array)$this->request->getParsedBody();
        $room = new RoomModel();

        $room->populate($data);
        $room = $this->roomService->save($room);

        if (!$room->id) {
            $this->view->flash()->set("warning", "Unable to save room data");
            return $this->response->withHeader("Location", "/room/list");
        }

        $this->view->flash()->set("success", "Data Updated");
        $redirect_url = $this->view->url(sprintf("/room/%d", $room->id));
        return $this->response->withHeader("Location", $redirect_url);
    }
}
