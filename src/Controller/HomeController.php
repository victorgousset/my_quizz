<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
     /**
      * @Route("/")
      */

    public function index()
    {
        $test = 5;

        return $this->render('pages/home.html.twig', ['chiffre' => $test]);
    }
}