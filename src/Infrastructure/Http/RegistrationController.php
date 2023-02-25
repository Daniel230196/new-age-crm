<?php

namespace App\Infrastructure\Http;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function execute(Request $request)
    {
        $data = $request->getContent();
        return $this->json(['token' => 'test'], 200, ['Content-type' => 'application/json', 'Access-Control-Allow-Credentials' => 'true', 'Access-Control-Allow-Methods' => 'GET,HEAD,OPTIONS,POST,PUT', 'Access-Control-Allow-Headers' => 'x-requested-with, Content-Type, origin, authorization, accept, x-access-token, Access-Control-Allow-Headers, Origin, Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers']);
    }
}