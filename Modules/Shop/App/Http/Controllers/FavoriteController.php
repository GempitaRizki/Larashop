<?php

namespace Modules\Shop\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Modules\Shop\Repositories\Front\Interfaces\FavoriteRepositoryInterface;

class FavoriteController extends Controller
{

    protected $favoriteRepository;


    public function __construct(FavoriteRepositoryInterface $favoriteRepository)
    {
        $this->favoriteRepository = $favoriteRepository;
    }
    public function index()
    {
        $favorite = $this->favoriteRepository->findByUserID(auth()->user());
        $this->data['favorite'] = $favorite;

        return $this->loadTheme('favorite.index', $this->data);
    }
}
