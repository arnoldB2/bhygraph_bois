<?php

namespace Brice\MesMenusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AproposControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Apropos/get');
    }

    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Apropos/getall');
    }

}
