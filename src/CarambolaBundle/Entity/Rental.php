<?php

namespace CarambolaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="CarambolaBundle\Entity\Repository\RentalRepository")
 * @ORM\Table(name="rentals")
 */
class Rental
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Car", inversedBy="rental")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    protected $car;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $status;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Type(type="integer", message="Please type number of days as integer!")
     */
    protected $daysNo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Rental
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set daysNo
     *
     * @param integer $daysNo
     * @return Rental
     */
    public function setDaysNo($daysNo)
    {
        $this->daysNo = $daysNo;

        return $this;
    }

    /**
     * Get daysNo
     *
     * @return integer 
     */
    public function getDaysNo()
    {
        return $this->daysNo;
    }

    /**
     * Set car
     *
     * @param \CarambolaBundle\Entity\Car $car
     * @return Rental
     */
    public function setCar(\CarambolaBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \CarambolaBundle\Entity\Car 
     */
    public function getCar()
    {
        return $this->car;
    }
}
