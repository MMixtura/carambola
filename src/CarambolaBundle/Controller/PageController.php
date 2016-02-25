<?php

namespace CarambolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarambolaBundle:Page:index.html.twig');
    }
}