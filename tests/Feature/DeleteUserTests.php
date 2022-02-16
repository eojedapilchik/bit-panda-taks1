<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\User;
use App\Models\UserDetail;

class DeleteUserTests extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testsUsersAreDeletedCorrectlyWhenNoUserDetailsExists()
    {
        $user = factory(User::class)->create([
            'id' => 1,
            'email' => "someemail@mail.com",
            'active' => 1,
        ]);

        $this->json('DELETE', '/users/' . $user->id)
            ->assertStatus(204);
    }

    public function testsUsersAreNotDeletedWhenNoUserDetailsExists()
    {
        $user = factory(User::class)->create([
            'id' => 1,
            'email' => "someemail@mail.com",
            'active' => 1,
        ]);

        $user_detail = factory(UserDetail::class)->create([
            'id' => 1,
            'used_id' => $user->id,
            'citizenship_country_id' => 2,
        ]);


        $this->json('DELETE', '/users/' . $user->id)
            ->assertStatus(404);
    }
}
