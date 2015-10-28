<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComputerControllerTest extends WebTestCase
{

    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', 'park/computer');
        $this->assertEquals(301, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /computer/");

        // Check data in the show view
        $this->assertTrue($crawler->filter('#computer_list')->count() > 0,  'Missing element computer_list');


        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'AppBundle_computer[name]'  => 'Ordinateur test',
            'AppBundle_computer[ip]'  => '127.0.0.56',
            'AppBundle_computer[enabled]'  => 1,
            // ... other fields to fill
        ));
        $client->submit($form);
        $crawler = $client->followRedirect();

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Update')->form(array(
            'AppBundle_computer[id]'  => 78,
            'AppBundle_computer[name]'  => 'Ordinateur test 1',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());

    }


}
