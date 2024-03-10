<?php

namespace Modules\Shop\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Shop\Repositories\Front\Interfaces\CartRepositoryInterface;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;
use Modules\Shop\Entities\Product;

class CartController extends Controller
{

    protected $cartRepository;
    protected $productRepository;

    public function __construct(CartRepositoryInterface $cartRepository, ProductRepositoryInterface $productRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $cart = $this->cartRepository->findByUser(auth()->user());
        $this->data['cart'] = $cart;

        return $this->loadTheme('carts.index', $this->data);
    }

    public function store(Request $request)
    {
        $productID = $request->get('product_id');
        $qty = $request->get('qty');

        $product = $this->productRepository->findByID($productID);

        if($product->stock_status != Product::STATUS_IN_STOCK){
            return back()->with('error', 'No Stock Available');
        }

        if($product->stock < $qty){
            return back()->with('error', 'Insufficient stock');
        }

        $item = $this->cartRepository->addItem($product, $qty);
        if (!$item){
            return back()->with('error', 'Cannot add items');
        }

        return back()->with('success', 'Item successfully added');
    }

    public function destroy($id)
    {
        $this->cartRepository->removeItem($id);

        return redirect(route('carts.index'))->with('success', 'Successfully removed item from cart');
    }
}
