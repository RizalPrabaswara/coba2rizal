<?php
declare(strict_types=1);

namespace coba2rizal\Action;

use Itseasy\Action\InvokableAction;
use Psr\Http\Message\ResponseInterface as Response;

class DashboardAction extends InvokableAction {

    public function httpGet() : Response {
        return $this->render("dashboard/dashboard", [
            "layout" => [
                "title" => "coba2rizal",
                "content_title" => "Dashboard"
            ],
            "message" => "This is dashboard area",
        ]);
    }
}
