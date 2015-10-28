<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculatorControllerTest extends WebTestCase
{

    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', 'park/calculator/sum/1/3');

        // test du code retour HTTP ok
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /calculator/sum/1/3");

        // test que la réponse est ok
        $this->assertTrue($crawler->filter('#sumResult')->count() > 0,  'No result found');
    }
}
