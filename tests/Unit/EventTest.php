<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_view_event_with_categories()
    { // add assertions to inspect the response content, json structure etc.
        $response = $this->get('/event');
        $response->assertStatus(200);

    }

    public function test_can_show_event_by_id()
    {
        $response = $this->get('/event/1');
        $response->assertStatus(200);
    }

    public function test_search()
    { // End point for search events doesn't exist yet
        $this->assertTrue(true);
    }
}
