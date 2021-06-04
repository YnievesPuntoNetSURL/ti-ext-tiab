<?php namespace YnievesDotNetTeam\Tiab;

use System\Classes\BaseExtension;

/**
 * Tiab Extension Information File
 */
class Extension extends BaseExtension
{

    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this extension.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'YnievesDotNetTeam\Tiab\Components\Breadcrumbs' => [
                'code' => 'autoBreadcrumbs',
                'name' => 'Automatic Breadcrumbs',
                'description' => 'Displays the Breadcrumbs',
            ],
        ];
    }
}
