<?php


namespace App\Controller;

use App\Form\ProfilUpdateForm;
use http\Client\Curl\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{

    /**
     * @Route("/profil")
     */

    public function profil()
    {
        if ($this->getUser()) {
            return $this->render('User/profil.html.twig');
        }

        return $this->render('User/profil.html.twig');
    }

    /**
     * @Route("/profil/{id}")
     */

    public function profilID($id)
    {

        $user = $this->getDoctrine()->getRepository(\App\Entity\User::class)->find($id);

        if ($user == null)
        {
            return new Response('Cet utilisateur n\'existe pas');
        }

        $mail = $user->getEmail();

        return $this->render('User/profilid.html.twig', compact('mail'));
    }

    /**
     * @Route("/update_profil")
     */

    public function updateProfil()
    {

        $form = $this->createForm(ProfilUpdateForm::class);

        return $this->render('User/profil_modification.html.twig', ['updateForm' => $form->createView()]);
    }

    /**
     * @Route("/create_my_quizz")
     */

    public function CreateMyQuizz()
    {

    }


}