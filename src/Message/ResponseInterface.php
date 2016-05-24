<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:21 PM
 */

namespace BookIt\Service\Demo\Message;


interface ResponseInterface
{
    /**
     * @param string $response
     */
    public function setFromRawResponse($response);
}