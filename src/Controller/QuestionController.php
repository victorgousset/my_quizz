<?php


namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use App\Entity\Reponse;
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

    /**
     * @Route("question/{categorie}")
     * @return Response
     */

    public function selectXQuestion($categorie)
    {
        $count = [];

        $verifID = $this->getDoctrine()->getRepository(Categorie::class)->find($categorie);

        if ($verifID == null)
        {
            return $this->redirect('/');
        }

        return $this->render('pages/select_x_question.html.twig', compact('categorie'));
    }

    /**
     * @Route("question/{categorie}/{nombre}")
     * @return Response
     */

    public function getXQuestion($categorie, $nombre)
    {
        $verifID = $this->getDoctrine()->getRepository(Categorie::class)->find($categorie);

        if ($verifID == null)
        {
            return $this->redirect('/');
        }

        if ($nombre > 109)
        {
            return $this->render('pages/404.html.twig');
        }

        $question = [];
        $reponse = [];

        $questionString = $this->getDoctrine()->getRepository(Question::class)
            ->findBy(['id_categorie' => $categorie], null, $nombre);

        for ($i = 0; $i < $nombre; $i++)
        {
            $id = $questionString[$i]->getId();
            array_push($reponse, $id);
        }

        var_dump($reponse);

        //$Reponse = $this->getDoctrine()->getRepository(Reponse::class)->findBy()

        return $this->render('pages/question.html.twig', compact('questionString'));



        //for ($i = 1; $i <= $nombre; $i++)
        //{
            //$id = rand(1, 109);

            //$valuePush = $id;

            //$questionString = $this->getDoctrine()->getRepository(Question::class)->findBy(['id_categorie' => $categorie], null, $nombre);
            //$q = $questionString->getQuestion();
            //$reponseString = $this->getDoctrine()->getRepository(Reponse::class)
              //  ->findOneBy(['id_question' => $valuePush, 'reponse_expected' => 1]);
            //$r = $reponseString->getReponse();
            //FIND BY
            //$MauvaiseReponseString = $this->getDoctrine()->getRepository(Reponse::class)->findBy(['id_question' => $valuePush, "reponse_expected" => 0]);


            //$reponse = $MauvaiseReponseString[0]->getQuestion():
            //$valuePush .= " - " . $questionString . "    " .  "Reponse: " ;


            //array_push($question, $questionString);
        //}

        //$questionString = $this->getDoctrine()->getRepository(Question::class)->findBy(['id_categorie' => $categorie], null, $nombre);

        //return $this->render('pages/question.html.twig', compact('questionString'));
        //return $this->render('pages/question.html.twig', compact(['question' => $question, 'mauvaise_reponse' => '']));

    }

}