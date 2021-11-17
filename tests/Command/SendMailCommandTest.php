<?php

namespace App\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class SendMailCommandTest extends KernelTestCase
{
    public function testExecute(): void
    {
        $kernel = static::bootKernel();
        $application = new Application($kernel);

        $command = $application->find('app:send-mail');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $this->assertEmailCount(1);
    }
}
