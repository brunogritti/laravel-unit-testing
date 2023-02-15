<?php

namespace Tests\Unit;

/* use PHPUnit\Framework\TestCase; */
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_name_is_jack()
    {

        $name = "Jack";
        // $name = "Jack";
        $this->assertTrue($name == "Jack");
        //$this->assertTrue(true);
    }

    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');
        //if it requires params $response = $this->post('/user', ['name' => 'Amy']);

        $response->assertStatus(200);
    }
}