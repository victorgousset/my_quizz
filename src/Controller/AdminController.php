<?php


namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\User;
use App\Form\UpdateUserByAdmin;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin")
     */
    public function index()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/index.html.twig');
    }

    /**
     * @Route("/admin/userlist")
     */
    public function usersList()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('admin/users.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/admin/utilisateurs/modifier/{id}")
     */
    public function editUser($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findBy(array('id' => $id));

        if ($user == null)
        {
            return new Response('Cet utilisateur n\'existe pas');
        }

        $form = $this->createForm(UpdateUserByAdmin::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $u = $em->getRepository(User::class)->find($id);
            $u->setEmail($data['email']);
            $em->flush();

            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('profil');
        }

        return $this->render('user/profil.html.twig', [
            'userForm' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
     * @Route("/admin/utilisateurs/supprimer/{id}")
     */
    public function deleteUser($id)
    {
        $em = $this->getDoctrine()->getManager();
        $u = $em->getRepository(User::class)->find($id);
        $em->remove($u);
        $em->flush();

        return $this->redirect('/admin/userlist');
    }

    /**
     * @Route("/admin/quizzlist")
     */
    public function quizzlist()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $quizz = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('admin/quizz.html.twig', [
            'quizz' => $quizz,
        ]);
    }

    /**
     * @Route("/admin/quizz/supprimer/{id}")
     */
    public function deleteQuizz($id)
    {
        $em = $this->getDoctrine()->getManager();
        $u = $em->getRepository(Categorie::class)->find($id);
        $em->remove($u);
        $em->flush();

        return $this->redirect('/admin/quizzlist');
    }

}