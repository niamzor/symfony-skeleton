<?php

namespace App\Controller;

use App\Entity\DefaultEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DefaultController extends AbstractController
{

    public function index(ValidatorInterface $validator): Response
    {
        $entity = new DefaultEntity('012');
        $errors = $validator->validate($entity);
        dump($errors->count());

        return new Response('It works');
    }
}
