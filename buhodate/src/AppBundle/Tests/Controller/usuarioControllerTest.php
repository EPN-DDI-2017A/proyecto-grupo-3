<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class usuarioControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testRegistro()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registro');
    }

    public function testModificar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modificar');
    }

    public function testModpass()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modpass');
    }

    public function testEliminar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/eliminar');
    }

}
