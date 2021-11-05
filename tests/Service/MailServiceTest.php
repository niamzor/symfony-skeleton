<?php

namespace App\Tests\Service;

use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MailServiceTest extends KernelTestCase
{
    public function testSend(): void
    {
        self::bootKernel();
        /** @var MailService $mailService */
        $mailService = static::getContainer()->get(MailService::class);
        $mailService->send();
        $this->assertEmailCount(1);
    }
}
