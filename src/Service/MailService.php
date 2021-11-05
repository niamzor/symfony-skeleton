<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailService
{
    public function __construct(
        private MailerInterface $mailer
    ) {
    }

    public function send(): void
    {
        $email = (new Email())
            ->from('noreply@example.com')
            ->to('noreply@example.com')
            ->subject('testing')
            ->text('Lorem ipsum...')
        ;
        $this->mailer->send($email);
    }
}
