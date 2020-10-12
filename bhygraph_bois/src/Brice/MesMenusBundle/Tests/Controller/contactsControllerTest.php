<?php

namespace Brice\MesMenusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class contactsControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/create');
    }

}
