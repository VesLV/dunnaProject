<?php

namespace App\Controller;

use App\Entity\DunnaEstates;
use App\Repository\DunnaEstatesRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/estates", name="estates")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function estates()
    {
        $estates = $this->getDoctrine()
            ->getRepository(DunnaEstates::class)
            ->findAllEstates();
        return $this->render('estates/index.html.twig',[
            'controller_name' => 'HomeController',
            'estates' => $estates
        ]);
    }
}
