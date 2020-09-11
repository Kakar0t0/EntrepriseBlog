<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class MicroBlogController extends AbstractController
{
    /**
     * @Route("/", name="micro_blog")
     */
    public function index(ArticleRepository $repo)
    {
        $articles = $repo->findAll();
        return $this->render('micro_blog/index.html.twig', [
            'controller_name' => 'MicroBlogController',
            'articles' => $articles
        ]);
    }
}
