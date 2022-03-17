<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\Routing\Annotation\Route;

class AccountPasswordController extends AbstractController
{
    #[Route('/compte/modifier-password', name: 'app_account_password')]
    public function index(Request $request): Response
    {
        // $user = $this->getUser();
        // $form = $this->createForm(ChangePasswordType::class, $user);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->) {
        //     # code...
        // }

        return $this->render('account/password.html.twig');
    }
}
