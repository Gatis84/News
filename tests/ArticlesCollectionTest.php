<?php

use App\Models\Article;
use App\Models\ArticlesCollection;

test('Articles collection should work', function () {
    $collection = new ArticlesCollection([
        new Article('Codelex', 'codelex', 'https:/codelex.io'),
        new Article('Google', 'google', 'https:/google.com'),
        new Article('Draugiem', 'draugiem', 'https:/draugiem.lv')
    ]);
    expect(count($collection->getAll()))->toBe(3);
    expect($collection->getAll()[1]->getTitle())->toBe('Google');
});
