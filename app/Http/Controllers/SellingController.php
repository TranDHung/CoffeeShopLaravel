<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        //session()->forget('cart');
        return view('pages.selling', compact('products', 'categories'));
    }

    /**
     * Add product to cart session.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCart($id)
    {        
        $product = Product::where('id', $id)->first();
        if($product != null) {
            $cart = session()->get('cart');
            // Kiểm tra có tồn tài cart nếu không tạo cart và thêm mới sản phẩm
            if(!$cart) {
                $cart = [
                    $id => [
                        'name' => $product->name,
                        'quantity' => 1,
                        'price' => $product->price,
                        'image' => $product->image
                    ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Thêm thành công!');
            }
            // Nếu tồn tại sản phẩm -> cập nhập số lượng lên là 1
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Thêm thành công!');
            }
            // Nếu có cart nhưng chưa có sản phẩm -> thêm sản phẩm mới với số lượng là 1
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Thêm thành công!');
        }
    }

    /**
     * Update product in cart session.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cập nhập thành công!');
        }
    }

    /**
     * Delete product from cart session.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteCart(Request $request)
    {
        $cart = session()->get('cart');

        if($request->id) {
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Xóa thành công!');
            }
        }        
    }

    /**
     * Delete all products from cart session.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAllCart()
    {
        $cart = session()->get('cart');
        if($cart) {
            session()->forget('cart');
            session()->flash('success', 'Xóa thành công!');
        }
        else {
            session()->forget('cart');
            session()->flash('fail', 'Không có sản phẩm nào để xóa!');
        }        
    }

    /**
     * Delete all products from cart session.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if($request->search) {
            if($request->search!='nothing')
            {
                $product = Product::where('name', 'LIKE', '%'.$request->search.'%')->get();
                if($product) {
                    return $product;
                }
                return 0;
            }
            return 1;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
