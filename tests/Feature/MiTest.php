<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSuma()
    {
        $resultado = 2 + 2;

        $this->assertEquals(4, $resultado);
    }

    public function testResta()
    {
        $resultado = 5 - 3;

        $this->assertEquals(2, $resultado);
    }

}
