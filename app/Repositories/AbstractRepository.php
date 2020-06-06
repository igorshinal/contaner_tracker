<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class AbstractRepository
{
    protected $entity;

    public function __construct(Eloquent $entity)
    {
        $this->entity = $entity;
    }

}
