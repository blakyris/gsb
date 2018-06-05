<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Entity\CalendarEvents;
use App\Entity\User;
use App\Entity\Product;
use App\Entity\ProductCategory;
use App\Entity\Manufacturer;
use App\Entity\ExpenseReport;
use App\Entity\Doctor;


/*

Pas 2 evenements en meme temps pour un meme utilisateur
Pas 2 produits completement identiques
Pas 2 utilisateur identique.
Pas de RDV le weekend

*/

class ApiController extends Controller
{
    private function constructProductData(Product $item)
    {
      $data = array(
        'name' => $item->getName(),
        'manufacturer' => $item->getManufacturer()->getName(),
        'price' => $item->getPrice(),
        'dose' => $item->getDose(),
        'thumbnail' => $item->getThumbnail()
      );

      return ($data);
    }

    /* ----------------------------------------------------- */

    /**
     * @Route("/api/login", name="api_login")
     */
    public function jsonLogin(Request $requests)
    {
      return $this->redirectToRoute('api_user');
    }

    /**
     * @Route("/api/user", name="api_user")
     */
    public function jsonUser()
    {
      $response = new JsonResponse();
      $user = $this->getUser();

      $data = array(
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname(),
        'birthdate' => date_format($user->getBirthdate(), "d-m-Y"),
        'email' => $user->getEmail(),
        'username' => $user->getUsername(),
      );

      $response->setData($data);

      return ($response);
    }

   /**
    * @Route("/api/get/products", name="api_get_products")
    */
    public function apiGetProducts()
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(Product::class);
      $items = $repository->findAll();

      $i = 0;
      $data = array();
      foreach ($items as $item) {
        $data[$i++] = $this->constructProductData($item);
      }

      $response->setData($data);

      return ($response);
    }

       /**
    * @Route("/api/get/product/{id}", name="api_get_one_product")
    */
    public function apiGetProductById($id)
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(Product::class);
      $item = $repository->find($id);

      $data = array();
      if ($item != null)
      {
          $data = $this->constructProductData($item);
      }

      $response->setData($data);

      return ($response);
    }


   /**
    * @Route("/api/get/manufacturers", name="api_get_manufacturers")
    */
    public function apiGetManufacturers()
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(Manufacturer::class);
      $items = $repository->findAll();

      $i = 0;
      $data = array();
      foreach ($items as $item) {

        $data[$i++] = array(
          'name' => $item->getName(),
          'address' => $item->getAddress(),
          'zip' => $item->getZip(),
          'city' => $item->getCity(),
          'phone' => $item->getPhone()
        );

      } 

      $response->setData($data);

      return ($response);
    }

   /**
    * @Route("/api/get/expensereports", name="api_get_expensereports")
    */
    public function apiGetExpenseReports()
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(ExpenseReport::class);
      $items = $repository->findAll();

      $i = 0;
      $data = array();
      foreach ($items as $item) {

        $data[$i++] = array(
          'reference' => "NF-" + $item->getId(),
          'amount' => $item->getPrice()
        );

      } 

      $response->setData($data);

      return ($response);
    }



    /**
    * @Route("/api/get/events", name="api_get_events")
    */
    public function apiGetCalendarEvents()
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(CalendarEvents::class);
      $usersRepo = $this->getDoctrine()->getRepository(User::class);
      $items = $repository->findAll();
      $i = 0;

      $data = array();
      foreach ($items as $item) {

        $user = $usersRepo->find($event->getCreator());

        $data[$i++] = array(
          'id' => $item->getId(),
          'title' => $item->getName(),
          'start' => $item->getStart()->format('Y-m-d H:i:s'),
          'end' => $item->getEnd()->format('Y-m-d H:i:s'),
          'allDay' => $item->getAllDay(),
          'createdBy' => $item->getFullName()
        );

      }

      $response->setData($data);

      return ($response);
    }
}
