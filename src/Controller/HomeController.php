<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
	/**
     * @Route("/", name="home")
     */
    public function index()
    {
        $page_title = 'First Page';


        return $this->render('home/home.html.twig', array(
            'page_title' => $page_title,
        ));
    }
}