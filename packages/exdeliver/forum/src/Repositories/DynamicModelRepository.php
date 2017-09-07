<?php namespace Exdeliver\Forum\Repositories;

class DynamicModelRepository extends AbstractRepository
{
    public function __construct($model)
    {
        parent::__construct($model);
    }
}