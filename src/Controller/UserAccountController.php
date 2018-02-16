<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserAccountController extends Controller
{
    /**
     * @Route("/account", name="user_account")
     */
    public function index()
    {
        return $this->render('user_account.html.twig');
    }
}
