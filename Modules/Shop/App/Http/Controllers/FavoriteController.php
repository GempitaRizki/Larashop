<?php

namespace Modules\Shop\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Modules\Shop\Repositories\Front\Interfaces\FavoritesRepositoryInterface;

class FavoriteController extends Controller
{

    protected $favoritesRepositoryInterface;

    public function __construct(FavoritesRepositoryInterface $favoritesRepositoryInterface)
    {
        $this->favoritesRepositoryInterface = $favoritesRepositoryInterface;
    }

    public function index()
    {
        $fav = $this->favoritesRepositoryInterface->findByUserId(auth()->user());
        $this->data['fav'] = $fav;

        return $this->loadTheme('carts.index', $this->data);
    }
}