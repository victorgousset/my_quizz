<?php


namespace App\Controller;

use App\Form\ProfilUpdateForm;
use http\Client\Curl\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


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

    public function updateProfil(\Symfony\Component\HttpFoundation\Request $request, UserInterface $user)
    {
        $form = $this->createForm(ProfilUpdateForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $u = $em->getRepository(\App\Entity\User::class)->find($user->getId());
            $u->setEmail($data['email']);
            $u->setPassword($data['password']);
            $em->flush();

            $this->addFlash('message', 'Compte modifié avec succès');
            return $this->redirectToRoute('profil');
        }

        return $this->render('admin/edituser.html.twig', [
            'userForm' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
     * @Route("/create_my_quizz")
     */

    public function CreateMyQuizz()
    {

    }


}