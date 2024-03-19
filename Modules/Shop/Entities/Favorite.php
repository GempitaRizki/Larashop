<?php

namespace Modules\Shop\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Builder;

class Favorite extends Model
{
    use UuidTrait;


    protected $table = 'shop_favorites';

    protected $fillable = [
        'user_id',
        'grand_total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(FavoriteItem::class);
    }

    public function scopeForUser(Builder $query, User $user): void
    {
        $query->where('user_id', $user->id);
    }

    public function getGrandTotalLabelAttribute()
    {
        return number_format($this->grand_total);
    }
}