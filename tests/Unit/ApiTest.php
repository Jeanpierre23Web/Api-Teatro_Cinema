<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ApiController;

class ApiTest extends TestCase
{
    /** @test */
    public function it_returns_data_from_endpoint()
    {
        // Arrange
        $controller = new ApiController();

        // Act
        $response = $controller->yourEndpointMethod(); // Reemplaza con el método de tu endpoint

        // Assert
        $this->assertEquals(expected_value, $response->original); // Reemplaza expected_value con el valor esperado de tu endpoint
    }
}