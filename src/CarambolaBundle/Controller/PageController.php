<?php

namespace CarambolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $cars = $em->getRepository('CarambolaBundle:Car')
            ->getAllCars();

        return $this->render('CarambolaBundle:Page:index.html.twig', array(
            'cars' => $cars
        ));
    }
}