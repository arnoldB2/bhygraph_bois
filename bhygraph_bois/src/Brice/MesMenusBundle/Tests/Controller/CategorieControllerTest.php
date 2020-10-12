<?php

namespace Brice\MesMenusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Categorie/getall');
    }

}
