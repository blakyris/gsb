<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserManagementController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $usersRepo = $this->getDoctrine()->getRepository(User::class);

        $form = $this->createForm(UserType::class, $user, array(
          'is_admin' => $this->isGranted('ROLE_ADMIN'),
        ));

        $users = $usersRepo->findAll();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_registration');
        }

        return $this->render('security/register.html.twig', array(
          'form' => $form->createView(),
          'users' => $users,
        ));
    }
}
