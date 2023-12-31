<?php declare(strict_types=1);

namespace App\controller;

use GaryClarke\Framework\Controller\AbstractController;
use GaryClarke\Framework\Http\Response;

class PostsController extends AbstractController
{
    public function show(int $id): Response
    {
        return $this->render('post.html.twig', [
            'postId' => $id
        ]);
    }

    public function create(): Response
    {
        return $this->render('create-post.html.twig');
    }
}