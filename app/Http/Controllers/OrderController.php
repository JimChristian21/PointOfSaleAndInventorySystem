<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\TransactionDetail;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderDetails = OrderDetail::all();
        $transactions = TransactionDetail::all();
        $products = Product::all();
        return view('orderDetails.orderInformation', ['orderDetails' => $orderDetails, 'transactions'=>$transactions, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $customer = Customer::all();
        return view('orderDetails.addOrder', ['products' => $product, 'customers' => $customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'payment' => "required|numeric",
        ]);

        $change = $request->payment - $request->amount;
        if($change >= 0)
        {
            $product = Product::find($request->product_id);
            $product->quantity_stock = $product->quantity_stock - $request->quantity;

            $newTransaction = new TransactionDetail();
            $newOrder = new OrderDetail();

            $newTransaction->cust_id = $request->customer_id;
            $newTransaction->user_id = $request->user_id;
            $newTransaction->amount_paid = $request->amount;
            $newTransaction->payment = $request->payment;
            $newTransaction->change = $change;
            $newTransaction->trans_date = date('Y-m-d H:i:s');
            $newTransaction->save();

            $lastTransaction = TransactionDetail::latest()->first();

            $newOrder->trans_id = $lastTransaction->id;
            $newOrder->product_id = $request->product_id;
            $newOrder->order_qty = $request->quantity;
            $newOrder->price = $product->price;
            $newOrder->amount = $request->amount;
            $newOrder->order_date = date('Y-m-d H:i:s');
            $newOrder->save();
            $product->save();

            return redirect('order')->with('addedOrder', 'Transaction is done successfully');
        }
        else
        {
            $product = Product::all();
            $customer = Customer::all();
            $request->session()->flash("payment", "Payment is not Enough");
            return view('orderDetails.addOrder', ['products' => $product, 'customers' => $customer]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = OrderDetail::find($id);
        $transaction = TransactionDetail::find($order->trans_id);
        $product = Product::find($order->product_id);
        $customer = Customer::find($transaction->cust_id);
        $employee = Employee::all();
        $user = User::all();


        return view('orderDetails.showOrderDetails', ['order'=>$order, 'transaction'=> $transaction, 'product' => $product, 'customer'=>$customer, 'employees' => $employee, 'users' => $user]);
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
        $order = OrderDetail::find($id);
        $order->delete();
        return redirect('order')->with('deleteOrder', 'Order deleted successfully');
    }

    public function addOrder(Request $request)
    {
        $request->validate([
            'quantity' => "required|numeric",
        ]);

        $product = Product::find($request->product);
        $customer = Customer::find($request->customer);
        $quantity = $request->quantity;

        return view('orderDetails.addFinalOrder', ['product' => $product, 'customer' => $customer, 'quantity' => $quantity]);
    }

    public function daily()
    {
        $orderDetails = OrderDetail::whereDate('created_at', Carbon::today())->get();
        $transactions = TransactionDetail::all();
        $products = Product::all();


        return view('orderDetails.orderInformation', ['orderDetails' => $orderDetails, 'transactions'=>$transactions, 'products' => $products]);
    }

    public function weekly()
    {
        $orderDetails = OrderDetail::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $transactions = TransactionDetail::all();
        $products = Product::all();


        return view('orderDetails.orderInformation', ['orderDetails' => $orderDetails, 'transactions'=>$transactions, 'products' => $products]);
    }

    public function monthly()
    {
        $orderDetails = OrderDetail::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->get();
        $transactions = TransactionDetail::all();
        $products = Product::all();

        return view('orderDetails.orderInformation', ['orderDetails' => $orderDetails, 'transactions'=>$transactions, 'products' => $products]);
    }
}
