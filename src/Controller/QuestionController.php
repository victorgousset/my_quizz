<?php


namespace App\Controller;

use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/list")
     * @return Response
     */

    public function listAll()
    {

        $question = $this->getDoctrine()->getRepository(Question::class);

        $a = $question->findAll();

        return $this->render('pages/list.html.twig', compact('a'));

    }

    /**
     * @Route("/list/{id}", name="id")
     * @return Response
     */

    public function index($id)
    {
        $question = $this->getDoctrine()
        ->getRepository(Question::class)->find($id);

        if ($question == null)
        {
            return new Response("Cette question n'existe pas");
        }

        $a = $question->getQuestion();

        return new Response($a);
    }

}