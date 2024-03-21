<?php

namespace Modules\Shop\Repositories\Front;

use App\Models\User;
use Carbon\Carbon;

use Modules\Shop\Entities\Favorite;
use Modules\Shop\Entities\FavoriteItem;
use Modules\Shop\Entities\Product;
use Modules\Shop\Repositories\Front\Interfaces\FavoriteRepositoryInterface;

class FavoriteRepository implements FavoriteRepositoryInterface
{

    public function findByUserID(User $user): Favorite
    {
        $favorite = Favorite::with([
            'items',
            'items.product',
        ])->forUser($user)->first();

        if (!$favorite) {
            return Favorite::create([
                'user_id' => $user->id,
            ]);
        }

        return $favorite;
    }

    public function addFav($product): FavoriteItem
    {
        $user = auth()->user();
        if (!$user) {
            throw new \Exception("User not authenticated");
        }
    
        $fav = $this->findByUserID($user);
    
        $existFav = FavoriteItem::where([
            'favorite_id' => $fav->id,
            'product_id' => $product->id
        ])->first();
    
        if ($existFav) {
            return $existFav;
        }

        $newFavoriteItem = new FavoriteItem([
            'favorite_id' => $fav->id,
            'product_id' => $product->id
        ]);
        $newFavoriteItem->save();
    
        return $newFavoriteItem;
    }
      
}
