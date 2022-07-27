<?php

namespace App\Controllers;

use App\Services\ShowAllArticlesService;
use App\View;

class ArticleController
{
    private ShowAllArticlesService $service;

    public function __construct(ShowAllArticlesService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        return new View('indexTest.html', [
            'articles' => $this->service->execute()->getAll()
        ]);
    }
}
