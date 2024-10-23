<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleModuleTest extends TestCase
{
    public function test_example_page()
    {
        $response = $this->get('/example');
        $response->assertStatus(200);
        $response->assertSee('Welcome to the Example Module!');
    }
}
