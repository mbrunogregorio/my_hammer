<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCategories() {
        $response = $this->get('/api/categories');

        $response->assertStatus(200);
    }

    public function testJobCreation() {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->json('POST', '/api/jobs/create', [
            'name' => 'Testing creation',
            'category_id' => '804040',
            'zipcode' => '42233',
            'execute_at' => Carbon::now()->toDateString()
        ]);
        $response
            ->assertStatus(200)
            ->assertExactJson([
                'success' => true,
            ]);
    }
}
