<?php

namespace CarambolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $car = $em->getRepository('CarambolaBundle:Car')->find($id);

        if (!$car) {
            throw $this->createNotFoundException('Car not found');
        }

        $rental = $em->getRepository('CarambolaBundle:Rental')
            ->getRental($car->getId());

        return $this->render('CarambolaBundle:Car:show.html.twig', array(
            'car' => $car,
            'rental' => $rental
        ));
    }
}