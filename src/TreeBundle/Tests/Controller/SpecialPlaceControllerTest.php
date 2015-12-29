<?php

namespace TreeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SpecialPlaceControllerTest extends WebTestCase
{
    public function testAddplace()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'add_place');
    }

}
