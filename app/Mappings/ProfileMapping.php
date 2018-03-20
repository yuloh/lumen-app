<?php

declare(strict_types=1);

namespace App\Mappings;

use App\Entities\Profile;
use App\Entities\Scientist;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class ProfileMapping extends EntityMapping
{
    public function mapFor()
    {
        return Profile::class;
    }

    public function map(Fluent $builder)
    {
        $builder->increments('id');

        $builder->belongsTo(Scientist::class)->inversedBy('profile');
    }
}
