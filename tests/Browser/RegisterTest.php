<?php


test('it registers a user', function () {

    visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'john@example.com')
        ->fill('password', 'secretpassword')
        ->click('Create Account')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'John Doe',
        'email' => 'john@example.com'
    ]);

});


test('it requires a valid email', function () {
    visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'john')
        ->fill('password', 'secretpassword')
        ->click('Create Account')
        ->assertPathIs('/register');

});

