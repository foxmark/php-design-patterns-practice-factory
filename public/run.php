<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$tool = new \AppBundle\Services\ApprovalServiceFactory();

var_dump($tool->getApprovalService('CloudFlow'));