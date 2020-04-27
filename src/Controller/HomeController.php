<?php


namespace App\Controller;

use App\Entity\Categorie;
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
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('pages/home.html.twig', compact('categorie'));
    }

}