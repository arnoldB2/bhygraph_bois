<?php

namespace Arnold\PartenaireBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireControllerTest extends WebTestCase
{
    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/partenaire/getall');
    }

}
