<?php

namespace AppBundle\Services;

abstract class ApprovalService
{
    abstract public function createApproval(): bool;
    abstract public function addUsers(): bool;
}