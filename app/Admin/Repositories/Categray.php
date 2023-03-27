<?php

namespace App\Admin\Repositories;

use App\Models\Categray as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Categray extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
