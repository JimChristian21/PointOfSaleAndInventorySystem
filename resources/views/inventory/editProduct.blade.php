@extends('dashboard')

@section('title')
	Inventory
@endsection

@section('content')

<div class="card mb-3">
                            
        <div class="card-body">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                
                <form method="POST" action="{{route('inventory.inventory.update', $product->id)}}">
                  @csrf
                  {{method_field('PUT')}}

                    <div class="form-group">
                        <label><h5>Name:</h5></label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        <span style="color:red;">@error('name'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Description:</h5></label>
                        <input type="text" name="description" value="{{$product->description}}" class="form-control">
                        <span style="color:red;">@error('description'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Quantity:</h5></label>
                        <input type="text" name="quantity_stock" value="{{$product->quantity_stock}}" class="form-control">
                        <span style="color:red;">@error('quantity'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Critical Quantity:</h5></label>
                        <input type="text" name="critical_quantity" value="{{$product->critical_quantity}}" class="form-control">
                        <span style="color:red;">@error('critical_quantity'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Price</h5></label>
                        <input type="text" name="price" value="{{$product->price}}" class="form-control">
                        <span style="color:red;">@error('price'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Discounted Price</h5></label>
                        <input type="text" name="discounted_price" value="{{$product->discounted_price}}" class="form-control">
                        <span style="color:red;">@error('discounted_price'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="category"><h5>Category:</h5></label>
                        <select id="category" name="category_id">
                              @foreach($categories as $category)
                                    <option value="{{$category->category_id}}">{{$category->name}}</option>
                              @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="supplier"><h5>Supplier:</h5></label>
                        <select id="supplier" name="supplier_id">
                              @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->supplier_id}}">{{$supplier->company_name}}</option>
                              @endforeach
                        </select>
                    </div>

                    </br>

                    
                    <div class="text-center">
                        <input type="submit" value="Save" class="btn btn-primary">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/inventory" class="btn btn-primary">Cancel</a>
                    </div>
                                    

                </form>
    </div>
</div>
@endsection