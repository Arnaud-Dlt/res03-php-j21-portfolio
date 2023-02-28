<?php // src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('homepage.html.twig', []);
    }

    /**
     * @Route("/a-propos", name="about")
     */

    public function about(): Response
    {
        return $this->render('about.html.twig', []);
    }
    
}