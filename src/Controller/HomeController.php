<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
  /**
  * @Route("/")
  */
  public function show()
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    return $this->redirectToRoute('user_account');
  }
}
