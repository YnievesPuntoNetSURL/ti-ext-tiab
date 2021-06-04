<?php

namespace YnievesDotNetTeam\Tiab\Components;

use System\Classes\BaseComponent;

class Breadcrumbs extends BaseComponent
{

    public function defineProperties()
    {
        return [
            'home_text' => [
                'label'      	=> 'lang:ynievesdotnetteam.tiab::default.home_text.label',
                'type'          => 'text',
                'placeholder'   => lang('ynievesdotnetteam.tiab::default.home_text.placeholder')
            ],
            'icon' => [
                'label'      	=> 'ynievesdotnetteam.tiab::default.icon.label',
                'type'          => 'text',
                'placeholder'   => lang('ynievesdotnetteam.tiab::default.icon.placeholder')
            ]
        ];
    }

    public function onRun() {
        global $page_title;
        $breadcrumb  = '<ol class="breadcrumb">';
        $root_domain = 'http://' . $_SERVER['HTTP_HOST'].'/';
        $breadcrumbs = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        $breadcrumb .= '<li><i class="fa fa-' . $this->property('icon', lang('ynievesdotnetteam.tiab::default.icon.default')) . '"></i>&nbsp;<a href="' . $root_domain . '" title="Home Page"><span>' . $this->property('home_text', lang('ynievesdotnetteam.tiab::default.home_text.default')) . '</span></a></li>';
        foreach ($breadcrumbs as $crumb) {
            $link = ucwords(str_replace(array(".php","-","_"), array(""," "," "), $crumb));
            $root_domain .=  $crumb . '/';
            $breadcrumb .= '<li><a href="'. $root_domain .'" title="'.$page_title.'"><span>' . $link . '</span></a></li>';
        }
        $breadcrumb .= '</ol>';
        $this->page['breadcrumbs'] = $breadcrumb;
    }
}
