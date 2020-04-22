<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoolStuffController extends AbstractController
{
    /**
     * @Route("/cool/stuff", name="cool_stuff")
     */
    public function index()
    {
        return $this->render('cool_stuff/index.html.twig', [
            'controller_name' => 'CoolStuffController',
        ]);
    }
}
