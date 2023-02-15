<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JSONTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_json()
    {
        $response = $this->get('/json-test');

        $response->assertStatus(200);

        //tests if updated property is true but not other properties
        $response->assertJson([
            'updated' => true,
        ]);

        //tests if the whole json is just an updated property that is true, if there are other properties, this returns false
        $response->assertExactJson([
            'updated' => true,
        ]);
    }
}