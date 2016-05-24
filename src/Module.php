<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 8:57 PM
 */

namespace BookIt\Service\Demo;


use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface
{
    public function getConfig()
    {
        return include __FILE__. '/../config/module.config.php';
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                'BookIt\Service\Demo\Connection' => 'BookIt\Service\Demo\Connection\ConnectionFactory',
            ],
            'invokables' => [
                'BookIt\Service\Demo' => 'BookIt\Service\Demo\DemoService'
            ]
        ];
    }

}