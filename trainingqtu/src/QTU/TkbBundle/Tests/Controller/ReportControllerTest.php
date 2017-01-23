<?php

namespace QTU\TkbBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testCombineclass()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/combineClass');
    }

}
