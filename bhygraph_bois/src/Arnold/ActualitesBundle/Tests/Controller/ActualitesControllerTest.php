<?php

namespace Arnold\ActualitesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActualitesControllerTest extends WebTestCase
{
    public function testGetrecentactualites()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Actualites/recent');
    }

    public function testGetactualiteshome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Actualites/home');
    }

    public function testGetallactualites()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Actualites/getall');
    }

    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Actualites/get');
    }

}
