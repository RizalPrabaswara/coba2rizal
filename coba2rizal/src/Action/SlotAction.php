<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use coba2rizal\Model\SlotModel;
use coba2rizal\Provider\SlotProvider;
use coba2rizal\Service\SlotService;
use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpForbiddenException;

use function DI\string;

class SlotAction extends InvokableAction
{
    protected $slotProvider;
    protected $slotService;

    public function __construct(SlotProvider $slotProvider, SlotService $slotService)
    {
        $this->slotProvider = $slotProvider;
        $this->slotService = $slotService;
    }

    public function httpGet(): ResponseInterface
    {
        $slot_id = $this->getArgument("id", null);

        if (is_null($slot_id)) {
            if ($this->getQuery("create", false)) {
                return $this->render("slot/form", [
                    "layout" => [
                        "content_title" => "Add New Slot"
                    ],
                    "slot" => new SlotModel()
                ]);
            }

            // $data = (string)$this->request->getParsedBody();
            // $slots_status = $this->slotProvider->listStatus($data);
            $slots_status = $this->slotProvider->listStatus();
            return $this->render("slot/liststatus", [
                "layout" => [
                    "content_title" => "slot status List"
                ],
                "slots_status" => $slots_status
            ]);

            // $slots = $this->slotProvider->listCity();
            // return $this->render("slot/list", [
            //     "layout" => [
            //         "content_title" => "slot List"
            //     ],
            //     "slots" => $slots
            // ]);

            // $slots_status = $this->slotProvider->listStatus();
            // return $this->render("slot/liststatus", [
            //     "layout" => [
            //         "content_title" => "slot status List"
            //     ],
            //     "slots_status" => $slots_status
            // ]);
        }

        $slot = $this->slotProvider->getUserById(intval($slot_id));

        if (!$slot->id) {
            throw new HttpForbiddenException($this->request);
        }

        if ($this->getQuery("delete", false)) {
            if ($this->slotService->remove($slot)) {
                $this->view->flash()->set("success", "slot Deleted");
            } else {
                $this->view->flash()->set("error", "Cannot delete slot");
            }
            $redirect_url = $this->view->url("/slot/list");
            return $this->response->withHeader("Location", $redirect_url);
        }

        return $this->render("slot/form", [
            "layout" => [
                "content_title" => "Edit slot"
            ],
            "slot" => $slot
        ]);
    }

    public function httpPost(): ResponseInterface
    {
        $data = (array)$this->request->getParsedBody();
        $slot = new SlotModel();

        $slot->populate($data);
        $slot = $this->slotService->save($slot);

        if (!$slot->id) {
            $this->view->flash()->set("warning", "Unable to save slot data");
            return $this->response->withHeader("Location", "/slot/list");
        }

        $this->view->flash()->set("success", "Data Updated");
        $redirect_url = $this->view->url(sprintf("/slot/%d", $slot->id));
        return $this->response->withHeader("Location", $redirect_url);
    }
}
