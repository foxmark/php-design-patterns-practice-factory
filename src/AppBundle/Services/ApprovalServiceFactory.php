<?php

namespace AppBundle\Services;

class ApprovalServiceFactory
{
    public function getApprovalService($type): ApprovalService
    {
        $approvalType = 'AppBundle\\Services\\' . ucwords($type) . '\\ApprovalService';

        if (!$this->isTypeSupported($approvalType)) {
            throw new \Exception('Approval type ' . $type . ' not found.');
        }

        return $this->getApprovalInstance($approvalType);
    }

    protected function getApprovalInstance($approvalType): ApprovalService
    {
        return new $approvalType();
    }

    protected function isTypeSupported($approvalType):bool
    {
        return class_exists($approvalType);
    }
}