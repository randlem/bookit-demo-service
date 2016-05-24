<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:21 PM
 */

namespace BookIt\Service\Demo\Message;


interface RequestInterface
{
    /**
     * @return string
     */
    public function getMethodName();

    /**
     * @return array
     */
    public function getParams();

    /**
     * @return string
     */
    public function getResponseClass();
}