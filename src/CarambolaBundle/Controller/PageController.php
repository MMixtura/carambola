<?php

namespace CarambolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $cars = $em->createQueryBuilder()
            ->select('c')
            ->from('CarambolaBundle:Car',  'c')
            ->addOrderBy('c.class', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('CarambolaBundle:Page:index.html.twig', array(
            'cars' => $cars
        ));
    }
}