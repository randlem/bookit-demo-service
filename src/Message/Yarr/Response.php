<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:45 PM
 */

namespace BookIt\Service\Demo\Message\Yarr;


use BookIt\Service\Demo\Message\ResponseInterface;

/**
 * This class is a concrete implementation of the ResponseInterface base.
 */
class Response implements ResponseInterface
{

    /**
     * @param mixed $response
     */
    public function setFromRawResponse($response)
    {
        // idk, do something with the data passed back
    }
}
