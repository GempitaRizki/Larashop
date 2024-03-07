<?php

namespace Modules\Shop\App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Modules\Shop\Entities\Product;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{

    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $options = [
            'per_page' => $this->perPage,
        ];
    
        $products = $this->productRepository->findAll($options);
    
        return $this->loadTheme('products.index', compact('products'));
    }
}
