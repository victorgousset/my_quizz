<?php


namespace App\Controller;

use Swift_Mailer;
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
        return $this->render('pages/home.html.twig');
    }

}