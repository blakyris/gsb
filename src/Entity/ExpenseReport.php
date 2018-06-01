<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExpenseReportRepository")
 */
class ExpenseReport
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="expense_reports")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id", nullable=false)
     */
    private $owner;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="float", nullable=false, name="totalPrice")
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $attachement;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $statut;

    /**
     * @ORM\Column(type="float", nullable=true, name="refundedPortion")
     */
    private $refundedPortion;

    /**
     * @ORM\Column(type="date", nullable=true, name="lastStatutUpdate")
     */
    private $lastStatutUpdate;

    /**
     * @ORM\Column(type="integer", nullable=true, name="statutUpdateBy")
     */
    private $statutUpdateBy;

    // SETTERS

    public function setId($id)
    {
      $this->id = $id;
    }

    public function setOwner($owner)
    {
      $this->owner = $owner;
    }

    public function setDate($date)
    {
      $this->date = $date;
    }

    public function setTotalPrice($totalPrice)
    {
      $this->$totalPrice = $totalPrice;
    }

    public function setAttachement($attachement)
    {
      $this->attachement = $attachement;
    }

    public function setStatut($statut)
    {
      $this->statut = $statut;
    }

    public function setRefundedPortion($refunded_portion)
    {
      $this->refundedPortion = $refundedPortion;
    }

    public function setLastStatutUpdate($lastStatutUpdate)
    {
      $this->lastStatutUpdate = $lastStatutUpdate;
    }

    public function setStatutUpdateBy($statutUpdateBy)
    {
      $this->statutUpdateBy = $statutUpdateBy;
    }

    // GETTERS

    public function getId()
    {
      return $this->id;
    }

    public function getOwner()
    {
      return $this->owner;
    }

    public function getDate()
    {
      return $this->date;
    }

    public function getTotalPrice()
    {
      return $this->totalPrice;
    }

    public function getAttachement()
    {
      return $this->attachement;
    }

    public function getStatut()
    {
      return $this->statut;
    }

    public function getRefundedPortion()
    {
      return $this->refundedPortion;
    }

    public function getLastStatutUpdate()
    {
      return $this->lastStatutUpdate;
    }

    public function getStatutUpdateBy()
    {
      return $this->statutUpdateBy;
    }

    // FUNCTIONS

    public function __construct()
    {
        $this->date = new \DateTime();
    }
}
