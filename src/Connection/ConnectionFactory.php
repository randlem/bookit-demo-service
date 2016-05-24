<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:06 PM
 */

namespace BookIt\Service\Demo\Connection;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ConnectionFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $fullConfig = $serviceLocator->get('Config');
        $config = $fullConfig['bookit']['service']['demo']['connection'];

        // this is where you'd validate that the config has the required parameters.  not worth checking if they're
        // valid.  just make the connection to validate them

        return new Connection($config);
    }

}