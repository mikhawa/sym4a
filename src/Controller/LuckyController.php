<?php
// src/Controller/LuckyController.php
namespace App\Controller;

// request http
use Symfony\Component\HttpFoundation\Request;
// response http
use Symfony\Component\HttpFoundation\Response;
// routing with annotation
use Symfony\Component\Routing\Annotation\Route;
// Controller is a simple implementation of a Controller. It provides methods to common features needed in controllers.
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * 
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}