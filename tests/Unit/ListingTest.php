<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListingTest extends TestCase
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

    public function test_get_listing()
    {
        $this->assertTrue(true);
        $this->get('/listings');
        $this->assertStatus(200);
    }

    public function test_get_listing_create_view()
    {
        $this->get('/listings/create');
        $this->assertStatus(200);
    }

    public function can_create_listing()
    {

    }

    public function test_get_listing_detail()
    {
        $this->get('/listings/1');
        $this->assertStatus(200);
    }

    public function test_can_edit_listing()
    {
        $this->get('/listings/1/edit');
        $this->assertStatus(200);
    }

    public function test_update_listing()
    {
        $this->get('/listings/1');
        $this->assertStatus(200);
    }

    public function test_can_destroy_listing()
    {
        $this->get('/listings/1');
        $this->assertStatus(200);
    }

}
