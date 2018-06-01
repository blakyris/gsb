<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Entity\User;
use App\Form\UserType;
use App\Service\Security;

class SecurityController extends Controller
{
  private $securityService;

  /**
   * @Route("/createAdmin", name="create_admin")
   */
    public function createAdminUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
      $usersRepo = $this->getDoctrine()->getRepository(User::class);
      $uCount = $usersRepo->countAllUsers();

      if ($uCount == 0)
      {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, array(
          'is_fresh_install' => true,
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // Encode the password
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // save the User
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // Do what you want here before redirecting the user

            return $this->redirectToRoute('login');
        }

        return $this->render('security/register_admin_user.html.twig', array(
          'form' => $form->createView(),
        ));
      } else {
        if ($this->getUser())
        {
          return $this->redirectToRoute('user_account');
        } else {
          return $this->redirectToRoute('login');
        }
      }
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
      $usersRepo = $this->getDoctrine()->getRepository(User::class);
      $uCount = $usersRepo->countAllUsers();

      if ($uCount == 0)
      {
        return $this->redirectToRoute('create_admin');
      } else {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
         'last_username' => $lastUsername,
         'error'         => $error,
        ));
      }
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
      $currentUserId = $this->getUser()->getId();
      if ($currentUserId == $id)
      {
        $session = $this->get('session');
        $session = new Session();
        $session->invalidate();
      }

      $em = $this->getDoctrine()->getManager();
      $usrRepo = $em->getRepository(User::class);

      $user = $usrRepo->find($id);
      $em->remove($user);
      $em->flush();

      if ($currentUserId == $id)
        return $this->redirectToRoute('logout');
      else
        return $this->redirectToRoute('user_registration');

    }

}
