<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class citaControllerTest extends WebTestCase
{
    public function testCrear()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/crearc');
    }

    public function testModificar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modificarc');
    }

    public function testCancelar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cancelarc');
    }

}
