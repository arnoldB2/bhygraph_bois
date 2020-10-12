<?php

namespace Arnold\CompetencesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CompetencesControllerTest extends WebTestCase
{
    public function testGetallcompetences()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/competences/getall');
    }

    public function testGetcompetences()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/competences/get');
    }

}
