<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPostRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;

// 跳轉頁面 回傳响应
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class ProductsController extends Controller
{
    // Laravel 中的開發順序是：路由(routes) -> 控制器(Controllers) -> 模型(Models) -> 視窗(Views)
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $products = Product::orderBy('created_at')->paginate($this->perPage);
        return view('products/index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View|Product
     */
    public function show(Product $product): Factory|View|Application|Product
    {
        return view('products/show', ['product' => $product]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        return view('products.create');
    }

    protected function uploadImage()
    {
# todo upload image
    }

    /**
     * Store a newly created product in storage.
     *
     * @param ProductPostRequest $request
     * @return RedirectResponse
     */
    public function store(ProductPostRequest $request): RedirectResponse
    {
        $vaildated = $request->validated();
        $product = new Product();
        $product->name = $vaildated['name'];
        $product->price = $vaildated['price'];
        // $product->image = $re
        $product->description = $vaildated['description'];
        if ($product->save()) {
            return redirect()->route('products.index');
        }
        return redirect()->back()->withInput()->withErrors($vaildated);
    }
    /**
     * Show the form for editing the specified product.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
public function edit(Product $product): Factory|View|Application
{
return view('products/edit', ['product' => $product]);
}

    /**
     * Update the specified product in storage.
     *
     * @param ProductPostRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductPostRequest $request, Product $product): RedirectResponse
    {
       $vaildated = $request->validated();
       $product->name = $vaildated['name'];
       $product->price = $vaildated['price'];
       $product->description = $vaildated['description'];
       if ($product->save()) {
         return redirect()->route('products.index');
       }
       return redirect()->back()->withInput()->withErrors($vaildated);
    }
    /**
     * Remove the specified product from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        if ($product->delete()) {
            return redirect()->route('products.index');
        }
        return redirect()->back();
    }
}

