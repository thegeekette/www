<?php
namespace AppBundle\Services;

class Calculator
{
    /**
     * @param $var1
     * @param $var2
     * @return mixed
     */
    public function makeSum($var1, $var2)
    {
        return $var1+$var2;
    }
}