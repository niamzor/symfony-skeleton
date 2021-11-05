<?php

namespace App\Controller;

use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{

    public function index(MailService $mailService): Response
    {
        $mailService->send();

        return new Response('It works');
    }
}
