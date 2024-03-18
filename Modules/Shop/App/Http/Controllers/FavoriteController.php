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
        $user = auth()->user();
        $favorite = $this->favoriteRepository->findByUserID($user);
        $this->data['favorite'] = $favorite;
    
        dd($this->data);
    
        return $this->loadTheme('favorite.index', $this->data);
    }
}
