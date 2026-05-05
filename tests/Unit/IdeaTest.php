<?php

use App\Models\Idea;
use App\Models\User;
use Illuminate\Support\Collection;

test('it belong to a user', function () {
    $idea = Idea::factory()->create();

    expect($idea->user )->toBeInstanceOf(User::class);
});

test('it can have steps ', function () {
    $idea = Idea::factory()->create();

    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        'description' => 'Get work done',
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);
});


