<?php

use App\Models\Article;

test('Article should work', function () {
    $article = new Article('Codelex', 'abc', 'https:/codelex.io');

    expect($article->getTitle())->toBe('Codelex');
    expect($article->getDescription())->toBe('abc');
    expect($article->getUrl())->toBe('https:/codelex.io');
});
