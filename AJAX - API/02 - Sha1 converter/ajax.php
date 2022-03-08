<?php
    require_once("action/AjaxAction.php");

    $action = new AjaxAction();
    $data = $action->execute();

    echo json_encode($data["result"]);