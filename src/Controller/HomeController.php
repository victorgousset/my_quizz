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
        $test = 5;
        return $this->render('pages/home.html.twig', ['chiffre' => $test]);
    }

    /**
     * @Route("/email")
     * @param Swift_Mailer $mailer
     */

    public function email(Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('envoyer@example.com')
            ->setTo('mail@example.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                    ['name' => "test"]
                ),
                'text/html'
            );

        $mailer->send($message);

        return new Response('ok');
    }


}