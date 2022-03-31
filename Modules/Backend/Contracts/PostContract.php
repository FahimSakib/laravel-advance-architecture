<?php

namespace Modules\Backend\Contracts;

interface PostContract{

    public function all($column=array('*'),string $orderBy='id', string $sortBy='desc');

    public function store(array $param);
}