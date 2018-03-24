<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $data=[];
        $data["nume"]="<span style='color:red'>Popescu Bogdan</span>";

        return $this->render('first_view.html.twig',$data);
    }
}
