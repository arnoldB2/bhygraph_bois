<?php

namespace Arnold\CommentaireBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentaireControllerTest extends WebTestCase
{
    public function testGetrecentrealisation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Commentaire/Realisation/getrecent');
    }

    public function testGetrecentnews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Commentaire/Actualites/getrecent');
    }

    public function testGetallrealisation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Realisation/getall');
    }

    public function testGetallnews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Actualites/getall');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Commentaire/create');
    }

}
