<?php

namespace CarambolaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CarambolaBundle\Entity\Repository\CarRepository")
 * @ORM\Table(name="cars")
 */
class Car
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $model;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $class;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $price;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $image;

    /**
     * @ORM\OneToOne(targetEntity="Rental", mappedBy="car")
     */
    protected $rental;
    

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
     * Set model
     *
     * @param string $model
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Car
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Car
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set rental
     *
     * @param \CarambolaBundle\Entity\Rental $rental
     * @return Car
     */
    public function setRental(\CarambolaBundle\Entity\Rental $rental = null)
    {
        $this->rental = $rental;

        return $this;
    }

    /**
     * Get rental
     *
     * @return \CarambolaBundle\Entity\Rental 
     */
    public function getRental()
    {
        return $this->rental;
    }

    public function __construct()
    {
        $this->setRental();
    }

    public function __toString()
    {
        return $this->getModel();
    }

}
