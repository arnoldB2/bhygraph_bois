<?php

namespace Brice\MesMenusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DocumentationControllerTest extends WebTestCase
{
    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Documentation/getall');
    }

    public function testDownload()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Documentation/download');
    }

}
