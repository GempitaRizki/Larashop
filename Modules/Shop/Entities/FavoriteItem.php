<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Traits\UuidTrait;

class FavoriteItem extends Model
{
    use UuidTrait;

    protected $table = 'shop_favorite_items';

    protected $fillable = [
        'favorite_id',
        'product_id',
    ];
    
    public function favorite()
    {
        return $this->belongsTo(Favorite::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}