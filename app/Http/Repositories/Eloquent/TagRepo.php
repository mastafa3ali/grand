<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\TagRepoInterface;
use App\Http\Repositories\Eloquent\AbstractRepo;
use App\Models\Tag;



class TagRepo extends AbstractRepo implements TagRepoInterface
{
    public function __construct()
    {
        parent::__construct(Tag::class);
    }
}
