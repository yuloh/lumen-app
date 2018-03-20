<?php

declare(strict_types=1);

namespace App\Mappings;

use App\Entities\Profile;
use App\Entities\Scientist;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class ScientistMapping extends EntityMapping
{
    public function mapFor()
    {
        return Scientist::class;
    }

    public function map(Fluent $builder)
    {
        $builder->increments('id');

        $builder->hasOne(Profile::class);
    }
}
