<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendMailCommand extends Command
{
    protected static $defaultName = 'app:send-mail';

    public function __construct(
        private MailerInterface $mailer
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = (new Email())
            ->from('noreply@example.com')
            ->to('noreply@example.com')
            ->subject('testing')
            ->text('Lorem ipsum...')
        ;
        try {
            $this->mailer->send($email);
        } catch (\Throwable $e) {
            dump($e);
        }

        return Command::SUCCESS;
    }
}
