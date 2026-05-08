<?php

use App\Models\User;


test('it login a user', function () {
    $user =  User::factory()->create(['password' => 'secretpassword']
    );

    visit('/login')
        ->fill('email',  $user->email)
        ->fill('password',  'secretpassword')
        ->click('Sign In')
        ->assertPathIs('/');

    $this->assertAuthenticated();

});


test('it logs out a user', function () {
    $user =  User::factory()->create(['password' => 'secretpassword']
    );

    $this->actingAs($user);

    visit('/')
        ->click('Logout')
        ->assertPathIs('/');

    $this->assertGuest();

});





