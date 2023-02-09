<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

class test1 extends \PHPUnit\Framework\TestCase
{
    public function testMock()
    {
        $this->assertTrue(true);
    }

    public function testMock2()
    {
        $mock = $this->getMockBuilder(AppBundle\Services\ApprovalServiceFactory::class)->setMethods(['isTypeSupported', 'getApprovalInstance'])->getMock();
        $mock->expects($this->once())
            ->method('isTypeSupported')
            ->with('AppBundle\Services\CloudFlow\ApprovalService')->willReturn(true);
        
        $mock->getApprovalService('CloudFlow');
    }

    public function testMock3()
    {
        $mock = $this->getMockBuilder(AppBundle\Services\ApprovalServiceFactory::class)->setMethods(['isTypeSupported', 'getApprovalInstance'])->getMock();
        $mock->expects($this->once())
            ->method('isTypeSupported')
            ->with('AppBundle\Services\CloudFlow\ApprovalService')->willReturn(true);
        
        $mock->getApprovalService('CloudFlow');
    }  

    public function testMock4()
    {
        $mock = $this->getMockBuilder(AppBundle\Services\ApprovalServiceFactory::class)->setMethods(['isTypeSupported'])->getMock();
        $mock->expects($this->once())
            ->method('isTypeSupported')
            ->with('AppBundle\Services\CloudFlow\ApprovalService')->willReturn(false);
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Approval type CloudFlow not found.');
        $mock->getApprovalService('CloudFlow');
    }

    public function Mock3()
    {
        $this->ignored();
        $mock = $this->createMock(AppBundle\Services\ApprovalServiceFactory::class);
        $mock->expects($this->once())
            ->method('isTypeSupported')
            ->with(
                $this->stringContains('Cloudflow'),
                $this->greaterThanOrEqual(100),
                $this->anything()
            );
        
        $mock->getApprovalService('Cloudflow', 101);
    }
}