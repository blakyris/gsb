<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\UserType;

class UserAccountController extends Controller
{
    /**
     * @Route("/account", name="user_account")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user, array(
          'is_admin' => $this->isGranted('ROLE_ADMIN'),
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // save the User
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the users

            return $this->redirectToRoute('user_account');
        }

        return $this->render('user_account.html.twig', array('form' => $form->createView()));
    }
}
