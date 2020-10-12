<?php

namespace Arnold\RealisationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RealisationControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Realisation/get');
    }

    public function testGetrecent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Realisation/getrecent');
    }

    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Realisation/getall');
    }

}
