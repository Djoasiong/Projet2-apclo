<?php

namespace App\Controller;

use App\Model\CatManager;

class CatController extends AbstractController
{
    public function index(): string
    {
        $catManager = new CatManager();
        $cats = $catManager->selectAllCats();
        $genders = $catManager->selectAllGenders();

        return $this->twig->render('Cats/index.html.twig', [
            'cats' => $cats,
            'genders' => $genders
        ]);
    }

    public function show(int $id): string
    {
        $catManager = new CatManager();
        $cat = $catManager->selectOneById($id);
        return $this->twig->render('Cat/show.html.twig', ['cat' => $cat]);
    }
}
