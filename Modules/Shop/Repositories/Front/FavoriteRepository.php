<?php

namespace Modules\Shop\Repositories\Front;

use App\Models\User;
use Carbon\Carbon;

use Modules\Shop\Entities\Favorite;

use Modules\Shop\Repositories\Front\Interfaces\FavoriteRepositoryInterface;

class FavoriteRepository implements FavoriteRepositoryInterface
{

    public function findByUserID(User $user): Favorite
    {
        $favorite = Favorite::with([
            'products',
            'users',
        ])->where('user_id', $user->id)->first();
    
        if (!$favorite) {
            return Favorite::create([
                'user_id' => $user->id,
            ]);
        }
    
        return $favorite;
    }
    

}
