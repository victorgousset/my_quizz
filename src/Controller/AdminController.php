<?php


namespace App\Controller;

use App\Entity\User;
use App\Form\UpdateUserByAdmin;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;


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
     * @Route("/userList")
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
    public function editUser($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findBy(array('id' => $id));

        $form = $this->createForm(UpdateUserByAdmin::class, $user);

        return new Response('a');
    }

}