<?php


namespace App\Controller;


use App\Entity\Property;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/question")
     */

    public function index()
    {
        //preparation
        $property = new Property();
        $property->setIdCategorie("2")
            ->setQuestion("Salut super question non ?");

        //envoie BDD
        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();

        return $this->render('pages/home.html.twig');
    }
}