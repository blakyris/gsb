<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\User;
use App\Entity\ExpenseReport;
use App\Form\ExpenseReportType;

/**
* @IsGranted("ROLE_USER")
*/
class ExpenseReportController extends Controller
{
    /**
     * @Route("/expense-reports/", name="expense_reports")
     */
    public function index(Request $request)
    {
      $report = new ExpenseReport();
      $form = $this->createForm(ExpenseReportType::class, $report, array(
        'is_admin' => $this->isGranted('ROLE_ADMIN'),
      ));

      $repository = $this->getDoctrine()->getRepository(ExpenseReport::class);
      $reports = $repository->findAll();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $currentUser = $this->getDoctrine()->getRepository(User::class)->find($this->getUser()->getId());

          dump($report);

          $report->setOwner($currentUser);
          $report->setStatut(0);

          $directory = $this->get('kernel')->getRootDir().'/../public/media/img/expense-report-proofs/';

          $file = $form['attachement']->getData();
          $extension = $file->guessExtension();
          $filename = 'proof'.rand(1, 99999).'.'.$extension;
          $file->move($directory, $filename);
          $report->setAttachement($filename);

          $em = $this->getDoctrine()->getManager();
          $em->persist($report);
          $em->flush();

          return $this->redirectToRoute('expense_reports');
      }

      foreach ($reports as $report) {

      }

      return $this->render('expense_reports.html.twig',  array(
        'reports' => $reports,
        'form' => $form->createView(),
      ));
    }

    /**
    * @Route("/expense-reports/delete/{id}", name="delete_expense_report")
    */
    public function delete($id)
    {
      $em = $this->getDoctrine()->getManager();
      $report = $em->getRepository(ExpenseReport::class)->find($id);

      $em->remove($report);
      $em->flush();

      return $this->redirectToRoute('expense_reports');
    }
}
