<?php

namespace AppBundle\Services\ProofHq;

use AppBundle\Services\ApprovalService as MasterApprovalService;

class ApprovalService extends MasterApprovalService
{
    public function createApproval(): bool
    {
        return false;
    }

    public function addUsers(): bool
    {
        return false;
    }
}