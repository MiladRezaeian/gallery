<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_method(): void
    {
        $response = $this->get(route('index'));

        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

}
