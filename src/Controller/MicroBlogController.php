<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MicroBlogController extends AbstractController
{
    /**
     * @Route("/", name="micro_blog")
     */
    public function index()
    {
        return $this->render('micro_blog/index.html.twig', [
            'controller_name' => 'MicroBlogController',
        ]);
    }
}
