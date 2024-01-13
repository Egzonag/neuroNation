<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\Session;
use App\Models\User;
use Carbon\Carbon;

class HistoryControllerTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testIndex()
    {
        // Create a user with sessions for testing
        $user = User::factory()->create();
        Session::factory()->count(15)->create(['user_id' => $user->id]);

        // Mock the request with the user ID
        $response = $this->get('/history?userId=' . $user->id);

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert the structure of the response JSON
        $response->assertJsonStructure([
            'history' => [
                '*' => [
                    'sessions' => [
                        'session_id',
                        'score',
                        'date',
                    ],
                ],
            ],
        ]);

        // You can also assert specific values or conditions in the response
        $response->assertJsonFragment([
            'history' => [
                'sessions' => [
                    'session_id' => 1, // Adjust based on your data
                    'score' => 100, // Adjust based on your data
                    'date' => Carbon::now()->format('Y-m-d'),
                ],
            ],
        ]);
    }
}
