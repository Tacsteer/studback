<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test the route with valid data.
     *
     * @return void
     */
    public function testRouteWithValidData()
    {
        $response = $this->get('/john/25');

        $response->assertStatus(200);
        $response->assertSee('Welcome, john!');
        $response->assertSee('Your age is 25 years old.');
    }
    /**
     * Test the route with invalid age.
     *
     * @return void
     */
    public function testRouteWithInvalidAge()
    {
        $response = $this->get('/john/abc');

        $response->assertStatus(404); //Assuming the route should return 404 for invalid age
    }

    /**
     * Test the route with missing parameters.
     *
     * @return void
     */
    public function testRouteWithMissingParameters()
    {
        $response = $this->get('/john');

        $response->assertStatus(404); // Assuming the route should return 404 for missing parameters
    }
}
