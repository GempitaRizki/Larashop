<?php

namespace Modules\Shop\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Modules\Shop\Repositories\Front\Interfaces\FavoriteRepositoryInterface;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;

class FavoriteController extends Controller
{

    protected $favoriteRepository;

    protected $productRepository;


    public function __construct(FavoriteRepositoryInterface $favoriteRepository, ProductRepositoryInterface $productRepository)
    {
        $this->favoriteRepository = $favoriteRepository;

        $this->productRepository = $productRepository;
    }
    public function index()
    {
        $favorite = $this->favoriteRepository->findByUserID(auth()->user());
        $this->data['favorite'] = $favorite;

        if ($favorite->isEmpty()) {
            return $this->loadTheme('favorite.empty');
        }

        return $this->loadTheme('favorite.index', $this->data);
    }


    public function addFavorite(Request $request)
    {
        try {
            $productID = $request->get('product_id');
            $product = $this->productRepository->findByID($productID);
    
            if (!$product) {
                return response()->json(['error' => 'Product not found'], 404);
            }
    
            $favoriteItem = $this->favoriteRepository->addFav($product);
            
            return back()->with('success', 'Item successfully added to Favorites');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function deleteFav($id)
    {
        $this->favoriteRepository->removeFav($id);

        return redirect(route('favorites.index'))->with('success', 'Successfully removed item from Favorites');
    }
    
}
