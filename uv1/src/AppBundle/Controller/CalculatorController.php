<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class CalculatorController
 * @Route ("/calculator")
 */
class CalculatorController extends Controller
{
    /**
     * Lists the result
     *
     * @Route("/sum/{var1}/{var2}", name="calculator_sum", requirements={"var1" = "\d+","var2" = "\d+"})
     * @Method("GET")
     * @Template()
     *
     * @param $var1
     * @param $var2
     * @return array
     */
    public function sumAction($var1, $var2)
    {
        $result = $this->get('park.calculator')->makeSum($var1,$var2);

        return array(
            'result' => $result
        );
    }
}