<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i < 10; $i++){
            $article = new Article();
            $article->setTitle("Titre de l'article n°$i")
                    ->setContent("Contenu de l'article n°$i")
                    ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        $manager->flush();
    }
}
