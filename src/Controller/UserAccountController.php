<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\UserType;

/**
* @IsGranted("ROLE_USER")
*/
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
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_account');
        }

        return $this->render('user_account.html.twig', array('form' => $form->createView()));
    }
}
