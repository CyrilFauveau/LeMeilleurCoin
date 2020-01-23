<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("", name="home_index", methods={"GET"})
     * @return Response
     */
    public function index (): Response {
        return $this->render('Pages/index.html.twig');
    }
}