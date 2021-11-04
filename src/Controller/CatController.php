<?php

namespace App\Controller;

use App\Model\CatManager;

class CatController extends AbstractController
{
    public function index(): string
    {
        $catManager = new CatManager();
        $cats = $catManager->selectAll();
        return $this->twig->render('Cats/index.html.twig', ['cats' => $cats]);
    }

    public function show(int $id): string
    {
        $catManager = new CatManager();
        $Cat = $catManager->selectOneById($id);

        return $this->twig->render('Cat/show.html.twig', ['Cat' => $Cat]);
    }
}