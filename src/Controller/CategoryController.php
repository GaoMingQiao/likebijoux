<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    #[Route('/', name: 'app_category')]
    public function index(ManagerRegistry $doctrine): Response


    {
      $categories=$doctrine->getRepository(Category::class)->findAll();


        return $this->render('category/home.html.twig', [
            'controller_name' => 'CategoryController',
            'categories'=>$categories


        ]);
    }
}
