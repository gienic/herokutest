<?php

namespace Test\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
	
	$crawler = $client->request('GET', '/printname/Nicolas'); 

        $this->assertTrue($crawler->filter('html:contains("Hello Nicolas")')->count() > 0);
    }
}
