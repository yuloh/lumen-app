<?php

declare(strict_types=1);

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ScientistTest extends TestCase
{
    use DatabaseMigrations,
        DatabaseTransactions;

    function test_scientist_can_be_created_with_a_profile()
    {
        $scientist = new \App\Entities\Scientist();
        $profile   = new \App\Entities\Profile($scientist);

        app('em')->persist($scientist);
        app('em')->persist($profile);
        app('em')->flush();

        $this->assertNotNull($scientist->id, 'The scientist should be persisted');
        $this->assertNotNull($profile->id, 'The profile should be persisted');

        $this->seeInDatabase('profiles', [
            'scientist_id' => $scientist->id,
        ]);
    }
}
