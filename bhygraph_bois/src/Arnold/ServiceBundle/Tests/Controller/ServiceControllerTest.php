<?php

namespace Arnold\ServiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServiceControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Service/get');
    }

    public function testGetrecent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Service/getrecent');
    }

    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Service/getall');
    }

}
