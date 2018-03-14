<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
      $error = $authUtils->getLastAuthenticationError();
      $lastUsername = $authUtils->getLastUsername();

      return $this->render('security/login.html.twig', array(
       'last_username' => $lastUsername,
       'error'         => $error,
      ));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {

    }

    /**
     * @Route("/delete_user/{id}", name="delete_user")
     */
    public function deleteUser($id)
    {
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository(User::class)->find($id);

      $em->remove($user);
      $em->flush();

      return $this->redirectToRoute('user_registration');
    }
}
