<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:04 PM
 */

namespace BookIt\Service\Demo;


use BookIt\Service\Demo\Connection\Connection;
use BookIt\Service\Demo\Message\Yarr\Request as YarrRequest;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;

class DemoService implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    protected $connection;

    public function processYarrs($arrrs)
    {
        $request = new YarrRequest();
        $request->setNumberOfArrrrrrrrs($arrrs);
        $response = $this->getConnection()->send($request);

        // we can then transform the result response into whatever we wish this method to return
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        if (!$this->connection) {
            $this->connection = $this->getServiceLocator()->get('BookIt\Service\Demo\Connection');
        }

        return $this->connection;
    }

}