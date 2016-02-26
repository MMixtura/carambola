<?php

namespace CarambolaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CarambolaBundle\Entity\Car;

class CarFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setModel('Fiat Panda');
        $car1->setClass('A');
        $car1->setPrice('50.00');
        $car1->setImage('fiatpanda.png');
        $manager->persist($car1);

        $car2 = new Car();
        $car2->setModel('Toyota Aygo');
        $car2->setClass('A');
        $car2->setPrice('80.00');
        $car2->setImage('toyotaaygo.png');
        $manager->persist($car2);

        $car3 = new Car();
        $car3->setModel('Opel Corsa');
        $car3->setClass('B');
        $car3->setPrice('85.50');
        $car3->setImage('opelcorsa.png');
        $manager->persist($car3);

        $car4 = new Car();
        $car4->setModel('Ford Focus Kombi Diesel');
        $car4->setClass('C');
        $car4->setPrice('120.00');
        $car4->setImage('fordfocuskombi.png');
        $manager->persist($car4);

        $car5 = new Car();
        $car5->setModel('VW Jetta');
        $car5->setClass('C');
        $car5->setPrice('135.75');
        $car5->setImage('vwjetta.png');
        $manager->persist($car5);

        $car6 = new Car();
        $car6->setModel('Audi A4 Kombi Diesel');
        $car6->setClass('D');
        $car6->setPrice('165.00');
        $car6->setImage('audia4kombi.png');
        $manager->persist($car6);

        $car7 = new Car();
        $car7->setModel('BMW 5 Diesel');
        $car7->setClass('E');
        $car7->setPrice('500.00');
        $car7->setImage('bmw5.png');
        $manager->persist($car7);

        $manager->flush();
    }
}