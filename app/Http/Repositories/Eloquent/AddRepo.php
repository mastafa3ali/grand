<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\AddRepoInterface;
use App\Http\Repositories\Eloquent\AbstractRepo;
use App\Models\Add;



class AddRepo extends AbstractRepo implements AddRepoInterface
{
    public function __construct()
    {
        parent::__construct(Add::class);
    }
}
