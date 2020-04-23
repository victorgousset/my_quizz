<?php


namespace App\Controller;

use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Sodium\compare;

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

    /**
     * @Route("/question/{nombre}")
     * @return Response
     */

    public function getXQuestion($nombre)
    {
        if ($nombre > 109)
        {
            return null;
        }

        $question = [];

        $getInfo = new Question();

        for ($i = 1; $i <= $nombre; $i++)
        {
            $id = rand(1, 109);

            $valuePush = $id;

            $questionString = $this->getDoctrine()->getRepository(Question::class)->find($valuePush);
            $s = $questionString->getQuestion();
            $valuePush .= " - " . $s;

            array_push($question, $valuePush);
        }

        return $this->render('pages/question.html.twig', compact('question'));
    }

}