<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        $order = $this->orderRepository->storeOrderDetails($request->all());

        $request->validate([
            'first_name'        =>  ['required', 'string', 'max:255'],
            'last_name'         =>  ['required', 'string', 'max:255'],
            'address'           =>  ['required', 'string', 'max:255'],
            'city'              =>  ['required', 'string', 'max:255'],
            'country'           =>  ['required', 'string', 'max:255'],
            'post_code'         =>  ['required', 'string', 'max:255'],
            'phone_number'      =>  ['required', 'string', 'max:255'],
            ]);

        dd($order);

        return redirect()->route('/homepage');
    }
}