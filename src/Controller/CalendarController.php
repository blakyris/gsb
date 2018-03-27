<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\CalendarEvents;

class CalendarController extends Controller
{
    /**
     * @Route("/calendar", name="calendar")
     */
    public function index()
    {
        return $this->render('calendar.html.twig');
    }

    /**
    * @Route("/calendar/events", name="calendar_events")
    */
    public function showEvents()
    {
      $response = new JsonResponse();

      $repository = $this->getDoctrine()->getRepository(CalendarEvents::class);
      $events = $repository->findAll();
      $i = 0;
      $data = array();

      foreach ($events as $event) {
        $data[$i++] = array(
          'id' => $event->getId(),
          'title' => $event->getName(),
          'start' => $event->getStart()->format('Y-m-d H:i:s'),
          'end' => $event->getEnd()->format('Y-m-d H:i:s'),
          'allDay' => $event->getAllDay()
        );
      }
      $response->setData($data);
      return ($response);
    }
}
