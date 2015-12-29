<?php

namespace TreeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PictureControllerTest extends WebTestCase
{
    public function testAddpicture()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'add_picture');
    }

}
