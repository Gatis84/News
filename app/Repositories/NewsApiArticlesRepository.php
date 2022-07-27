<?php
namespace App\Repositories;

require 'vendor/autoload.php';

use App\Models\Article;
use App\Models\ArticlesCollection;
use GuzzleHttp\Client;

class NewsApiArticlesRepository implements ArticlesRepository
{
    //private const API_URL = 'https://newsapi.org/v2';
    //private const API_KEY = "476f7a1fda644fdf898027a97ae32ef7";

    private Client $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => $_ENV['NEWS_API_URL']
        ]);
    }

    public function getAll(): ArticlesCollection
    {

        $url = $_ENV['NEWS_API_URL'] . '/top-headlines?country=lv&apiKey=' . $_ENV['NEWS_API_KEY'];
        $apiResponse = json_decode($this->httpClient->get($url)->getBody()->getContents());

        $articles = [];
        foreach ($apiResponse->articles as $article)
        {
            $articles[]= new Article(
                (string) $article->title,
                (string) $article->description,
                (string) $article->url,
                (string) $article->urlToImage
            );
        }
        return new ArticlesCollection($articles);
    }
}