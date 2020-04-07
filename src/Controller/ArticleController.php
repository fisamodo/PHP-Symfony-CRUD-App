<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController{

    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index(){

        $articles =['Article 1', 'Article 2'];
        return $this->render('articles/index.html.twig', array
        ('articles' =>$articles));
    }
}