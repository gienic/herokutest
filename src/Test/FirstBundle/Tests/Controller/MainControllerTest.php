<?php

namespace Test\FirstBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/printfirstname/Nicolas');

        $this->assertTrue($crawler->filter('html:contains("Hello Nicolas")')->count() > 0);


        $crawler = $client->request('GET', '/printfirstname/Marvin');

        $this->assertTrue($crawler->filter('html:contains("Hello Marvin")')->count() > 0);

    }
}
