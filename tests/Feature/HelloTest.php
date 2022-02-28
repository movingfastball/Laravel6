<?php

namespace Tests\Feature;
/*
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
*/
/*
class HelloTest extends TestCase
{
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
*/

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{

    public function testHello()
    {
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $msg = "Hello";
        $this->assertEquals('Hello',$msg);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }
}




