<?php
namespace App\Services;

use App\Models\ArticlesCollection;
use App\Repositories\ArticlesRepository;

class   ShowAllArticlesService
{
    private ArticlesRepository $articlesRepository;

    public function __construct(ArticlesRepository $articlesRepository)
    {
        $this->articlesRepository = $articlesRepository;
    }

    public function execute(): ArticlesCollection
    {
        return $this->articlesRepository->getAll();
    }
}
