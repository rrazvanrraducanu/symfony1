<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="ura")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/welcome", name="welcome")
     */
    public function welcome()
    {
        die('URA!!!');
        //return $this->render('welcome/index.html.twig');
    }
    /**
     * @Route("/view", name="view")
     */
    public function view()
    {
        $data=[];
        $data["nume"]="Popescu Bogdan";
        return $this->render('first_view.html.twig',$data);
    }
}
