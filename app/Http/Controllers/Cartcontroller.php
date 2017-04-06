<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Cart;
use Auth;

class Cartcontroller extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function addToCart(CartRequest $request, Product $product)
    {
        $count = $request->get('count', 1);
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int)$count,
            'price' => (double)$product->price,
            'options' => ['image' => $product->image]
        ];
        Cart::add($data);
        return back()->with('message', 'Thêm Thành Công');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect()->route('cart')->with('message', 'Xóa Thành Công');;
    }

    public function order(){
        $datas = Cart::content();
        $id = Auth::User()->id;
        $order = new Order();
        $order->user_id = $id;
        $order->price = (double)Cart::total();
        $order->state = 1;
        if($order->save()){
            foreach ($datas as $item){
                $detail = new OrderDetail();
                $detail->order_id = $order->id;
                $detail->product_id = $item->id;
                $detail->price = (double)$item->price;
                $detail->count = (int)$item->qty;
                $detail->save();
            }
        }
        Cart::destroy();
        return redirect()->route('cart');
    }
}
