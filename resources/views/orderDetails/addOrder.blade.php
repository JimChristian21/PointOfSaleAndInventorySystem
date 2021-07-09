@extends('dashboard')

@section('title')
Transaction
@endsection

@section('content')

@if(session('payment'))
	<script>
        alert('Payment is not enough! Create new transaction again.');
    </script>
@endif

<div class="card mb-3">
                            
        <div class="card-body">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                
                <form method="POST" action="{{route('addOrder')}}">
                    @csrf

                    <div class="form-group">
                        <label for="product"><h5>Product:</h5></label>
                        <select id="product" name="product">
                              @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                              @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label><h5>Quantity:</h5></label>
                        <input type="text" name="quantity" placeholder="Quantity" class="form-control">
                        <span style="color:red;">@error('quantity'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="customer"><h5>Customer:</h5></label>
                        <select id="customer" name="customer">
                              @foreach($customers as $customer)
                                    <option value="{{$customer->id}}">{{$customer->first_name}} {{$customer->last_name}} </option>
                              @endforeach
                              
                        </select>
                        <a href="{{route('customer.customer.create')}}" class="btn btn-primary btn-sm">Add Customer</a>
                    </div>       

                    </br>

                    <div class="text-center">
                        <input type="submit" value="Proceed" class="btn btn-primary">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/order" class="btn btn-primary">Cancel</a>
                    </div>
                                    

                </form>
    </div>
</div>
@endsection