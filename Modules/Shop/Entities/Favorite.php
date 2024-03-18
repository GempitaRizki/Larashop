<?php

namespace Modules\Shop\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    Use HasFactory, UuidTrait;

    protected $table = "shop_favorites";

    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
