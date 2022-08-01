<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Add extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function category(): ?BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user(): ?BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tags(): ?HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
