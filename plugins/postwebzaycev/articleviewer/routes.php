<?php

use PostwebZaycev\ArticleViewer\Models\Article;

Route::get('postweb-zaycev/get-article-records', function () {
    $articlesPath = '/plugins/postwebzaycev/articleviewer/assets/articles/';
    $articleRecordFields = ['article_name', 'explicit', 'number_of_pages', 'image_format', 'place_of_creation'];
    $articles = Article::all();
    $articleRecords = [];

    foreach ($articles as $article) {
        $articleRecord = [];

        for ($i = 0; $i < count($articleRecordFields); $i++) {
            $field = $articleRecordFields[$i];
            $articleRecord[$field] = $article->$field;
        }

        $articleRecord['directory_path'] = $articlesPath . $article->directory_name;
        $articleRecord['date_of_creation'] = strftime('%B %G, ', strtotime($article->date_of_creation));
        $articleRecords[$article->id] = $articleRecord;
    }

    traceLog($articleRecords);

    echo json_encode($articleRecords);
});
