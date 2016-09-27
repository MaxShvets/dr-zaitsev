<?php namespace PostwebZaycev\ArticleViewer\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;

/**
 * Articles Back-end Controller
 */
class Articles extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    private $articlesPath = '/postwebzaycev/articleviewer/assets/articles/';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('PostwebZaycev.ArticleViewer', 'articleviewer', 'articles');
    }

    private function generateDirectoryName($articleName) {
        return str_replace(' ', '', $articleName) . str_random(10);
    }

    private function getDirectoryPath($directoryName) {
        return plugins_path() . $this->articlesPath . $directoryName;
    }

    private function renameArticleDirectory($oldDirectoryName, $newArticleName) {
        $oldDirectoryPath = $this->getDirectoryPath($oldDirectoryName);
        $newDirectoryName = $this->generateDirectoryName($newArticleName);
        $newDirectoryPath = $this->getDirectoryPath($newDirectoryName);
        rename($oldDirectoryPath, $newDirectoryPath);

        return $newDirectoryName;
    }

    private function createDirectory($directoryName) {
        $directoryPath = $this->getDirectoryPath($directoryName);
        mkdir($directoryPath);
        chmod($directoryPath, 0777);
    }

    private function saveNewDataToModel($model, $newData) {
        foreach ($newData as $key => $data) {
            $model->$key = $data;
        }

        $model->save();
    }

    public function create_onSave() {
        traceLog(post());
        $articleData = post('Article');
        $directoryName = $this->generateDirectoryName($articleData['article_name']);
        $articleData['directory_name'] = $directoryName;
        $this->createDirectory($directoryName);

        $newArticle = $this->formCreateModelObject();
        $this->saveNewDataToModel($newArticle, $articleData);
        Flash::success('New article was created');

        if ($redirect = $this->makeRedirect('create', $newArticle)) {
            return $redirect;
        }
    }

    public function update_onSave($recordId) {
        $article = $this->formFindModelObject($recordId);
        $this->initForm($article);
        $newData = post('Article');

        if ($newData['article_name'] !== $article->article_name) {
            $oldDirectoryName = $article->directory_name;
            $article->directory_name = $this->renameArticleDirectory($oldDirectoryName, $newData['article_name']);
        }

        $this->saveNewDataToModel($article, $newData);
        Flash::success('Article was successfully updated');

        $redirect = $this->makeRedirect('update', $article);

        if (post('close') === '1') {
            $redirect = $this->makeRedirect('index', $article);
        }

        if ($redirect) {
            return $redirect;
        }
    }
}
