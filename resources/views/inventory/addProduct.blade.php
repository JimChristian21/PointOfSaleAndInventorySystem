@extends('dashboard')

@section('title')
	Inventory
@endsection

@section('content')

<div class="card mb-3">
                            
        <div class="card-body">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                
                <form method="POST" action="{{route('inventory.inventory.store')}}">
                    @csrf

                   

                    <div class="form-group">
                        <label><h5>Name:</h5></label>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                        <span style="color:red;">@error('name'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Description:</h5></label>
                        <input type="text" name="description" placeholder="Description" class="form-control">
                        <span style="color:red;">@error('description'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Quantity:</h5></label>
                        <input type="text" name="quantity_stock" placeholder="Quantity" class="form-control">
                        <span style="color:red;">@error('quantity'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Critical Quantity:</h5></label>
                        <input type="text" name="critical_quantity" placeholder="Critical Quantity" class="form-control">
                        <span style="color:red;">@error('critical_quantity'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Price</h5></label>
                        <input type="text" name="price" placeholder="Price" class="form-control">
                        <span style="color:red;">@error('price'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label><h5>Discounted Price</h5></label>
                        <input type="text" name="discounted_price" placeholder="Discounted Price" class="form-control">
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
                                    <option value="{{$supplier->id}}">{{$supplier->company_name}}</option>
                              @endforeach
                        </select>
                    </div>

                    </br>

                    <div class="text-center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/inventory" class="btn btn-primary">Cancel</a>
                    </div>
                                    

                </form>
    </div>
</div>
@endsection