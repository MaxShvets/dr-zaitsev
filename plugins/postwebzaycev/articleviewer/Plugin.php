<?php namespace PostwebZaycev\ArticleViewer;

use Backend;
use System\Classes\PluginBase;

/**
 * ArticleViewer Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ArticleViewer',
            'description' => 'No description provided yet...',
            'author'      => 'PostwebZaycev',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'PostwebZaycev\ArticleViewer\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'postwebzaycev.articleviewer.some_permission' => [
                'tab' => 'ArticleViewer',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'articleviewer' => [
                'label'       => 'ArticleViewer',
                'url'         => Backend::url('postwebzaycev/articleviewer/articles'),
                'icon'        => 'icon-leaf',
                'permissions' => ['postwebzaycev.articleviewer.*'],
                'order'       => 500,
            ],
        ];
    }

}
