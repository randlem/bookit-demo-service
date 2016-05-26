<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:34 PM
 */

namespace BookIt\Service\Demo\Message\Yarr;


use BookIt\Service\Demo\Message\RequestInterface;

/**
 * This class is a concrete implementation of the RequestInterface base
 */
class Request implements RequestInterface
{

    protected $rrrrrs;

    public function setNumberOfArrrrrrrrs($r) {
        $this->rrrrrs = $r;
    }

    public function getNumberOfArrrrrrrrs() {
        return $this->rrrrrs;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return 'yarr'
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return [
            'numrs' => $this->getNumberOfArrrrrrrrs();
        ];
    }

    /**
     * @return string
     */
    public function getResponseClass()
    {
        return __NAMESPACE__. '\\'. 'Response';
    }
}
