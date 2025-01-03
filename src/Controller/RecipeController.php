<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class RecipeController extends AbstractController
{
    #[Route('/recipe/{name}', name: 'app_recipe')]
    public function index(Request $request, RecipeRepository $RecipeRepository): JsonResponse
    {
        
        return $this->json($RecipeRepository->findOneByName($request->query->get('name')));
    }
}
