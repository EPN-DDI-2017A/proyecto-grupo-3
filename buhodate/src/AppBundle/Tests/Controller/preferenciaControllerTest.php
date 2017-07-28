<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class preferenciaControllerTest extends WebTestCase
{
    public function testCrear()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/crearp');
    }

    public function testModificarp()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modificarp');
    }

    public function testEliminar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/eliminarp');
    }

}
