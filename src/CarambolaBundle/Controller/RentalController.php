<?php

namespace CarambolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CarambolaBundle\Entity\Rental;
use CarambolaBundle\Form\RentalType;

class RentalController extends Controller
{
    public function formAction($car_id)
    {
        $car = $this->getCar($car_id);

        $rental = new Rental();
        $rental->setCar($car);
        $form   = $this->createForm(new RentalType(), $rental);

        return $this->render('CarambolaBundle:Rental:reserve.html.twig', array(
            'rental' => $rental,
            'form'   => $form->createView()
        ));
    }

    protected function getCar($car_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $car = $em->getRepository('CarambolaBundle:Car')->find($car_id);

        if (!$car) {
            throw $this->createNotFoundException('Unable to find the car.');
        }

        return $car;
    }


}