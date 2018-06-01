<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\CalendarEvents;
use App\Entity\User;
use App\Form\CalendarEventType;

class CalendarController extends Controller
{
    /**
     * @Route("/calendar", name="calendar")
     */
    public function index(Request $request)
    {
      $event = new CalendarEvents();
      $form = $this->createForm(CalendarEventType::class, $event, array(
        'is_admin' => $this->isGranted('ROLE_ADMIN'),
      ));

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $event->setCreator($this->getUser()->getId());

          $em = $this->getDoctrine()->getManager();
          $em->persist($event);
          $em->flush();

          return $this->redirectToRoute('calendar');
      }

      return $this->render('calendar.html.twig',  array(
        'form' => $form->createView(),
      ));
    }

    /**
    * @Route("/calendar/events", name="calendar_events")
    */
    public function showEvents()
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(CalendarEvents::class);
      $usersRepo = $this->getDoctrine()->getRepository(User::class);
      $events = $repository->findAll();
      $i = 0;
      $data = array();

      foreach ($events as $event) {
        $user = $usersRepo->find($event->getCreator());

        $data[$i++] = array(
          'id' => $event->getId(),
          'title' => $event->getName(),
          'start' => $event->getStart()->format('Y-m-d H:i:s'),
          'end' => $event->getEnd()->format('Y-m-d H:i:s'),
          'allDay' => $event->getAllDay(),
          'createdBy' => $user->getFullName()
        );
      }
      $response->setData($data);
      return ($response);
    }

    /**
    * @Route("/calendar/events/delete/{id}", name="delete_event")
    */
    public function deleteEvent($id)
    {
      $em = $this->getDoctrine()->getManager();
      $event = $em->getRepository(CalendarEvents::class)->find($id);

      $em->remove($event);
      $em->flush();

      return $this->redirectToRoute('calendar');
    }
}
