<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{

  /**
   * @Route("/register_admin", name="admin_registration")
   */
  public function registerAdminAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
  {
    // build the form
    $user = new User();
    $form = $this->createForm(UserType::class, $user, array(
      'is_fresh_install' => true,
    ));

    $usersRepo = $this->getDoctrine()->getRepository(User::class);
    $users = $usersRepo->findAll();

    // handle the submit (will only happen on POST)
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
        // maybe set a "flash" success message for the user

        return $this->redirectToRoute('login');
    }

    return $this->render('security/register_admin_user.html.twig', array(
      'form' => $form->createView(),
      'users' => $users
    ));
  }

    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user, array(
          'is_admin' => $this->isGranted('ROLE_ADMIN'),
        ));

        $usersRepo = $this->getDoctrine()->getRepository(User::class);
        $users = $usersRepo->findAll();

        // handle the submit (will only happen on POST)
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
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('user_registration');
        }

        return $this->render('security/register.html.twig', array(
          'form' => $form->createView(),
          'users' => $users
        ));
    }
}
