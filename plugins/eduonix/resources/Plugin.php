<?php namespace Eduonix\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'=>'Eduonix',
            'description'=>'provides company resources',
            'author'=> 'Fadhl Ba wazir',
            'icon'=>'icon-leaf',
        ];
    }

    public function registerComponents()
    {
        return [
            '\Eduonix\Resources\Components\Links'=>'resourcesLinks'
        ];
    }
}