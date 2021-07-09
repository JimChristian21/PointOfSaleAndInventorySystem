@extends('dashboard')

@section('title')
Transaction
@endsection

@section('content')
<div class="card mb-3">
                            
        <div class="card-body">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                
                <form method="POST" action="{{route('order.order.store')}}">
                @csrf

                  <h5>Product: <span class="text-primary">{{$product->name}}</span></h5>
                  </br>
                  <h5>Product Quantity:  <span class="text-primary">{{$quantity}}</span></h5>
                  </br>
                  <h5>Amount:  <span class="text-primary">{{$quantity * $product->price}}</span></h5>
                  </br>
                  <h5>Customer:  <span class="text-primary">{{$customer->first_name}} {{$customer->last_name}}</span></h5>
                  </br>
                  <h5>Discounted Price:  <span class="text-primary">{{$product->discounted_price * $quantity }}</span></h5>
                  </br>
                  <h5>Total Amount:  <span class="text-primary">{{$quantity * $product->price - ($product->discounted_price * $quantity)}}</span></h5>

                  </br>

                  <div class="form-group">
                        <label><h5>Payment:</h5></label>
                        <input id="payment" type="text" name="payment" placeholder="Payment" class="form-control">
                        
                        <span style="color:red;">@error('payment'){{$message}}@enderror</span>
                  </div>

                  <input type="hidden" name="product_id" value="{{$product->id}}">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <input type="hidden" name="quantity" value="{{$quantity}}">
                  <input type="hidden" name="customer_id" value="{{$customer->id}}">
                  <input id="amount" type="hidden" name="amount" value="{{$quantity * $product->price - ($product->discounted_price * $quantity)}}">
                 
                  
                  </br>

                    <div class="text-center">

                        <input type="submit" value="Proceed" class="btn btn-primary">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/order" class="btn btn-primary">Cancel</a>
                    </div>
                                    

                </form>
    </div>

</div>
@endsection