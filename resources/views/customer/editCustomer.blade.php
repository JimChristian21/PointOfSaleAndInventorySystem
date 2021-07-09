@extends('dashboard')

@section('title')
      Edit Customer
@endsection

@section('content')

<div class="card mb-3">            
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    
                                    <form method="POST" action="{{route('customer.customer.update', $customer->id)}}">
                                        @csrf
                                        {{method_field('PUT')}}
                                       
                    
                                        <div class="form-group">
                                            <label><h5>First Name:</h5></label>
                                            <input type="text" name="first_name" value="{{$customer->first_name}}" class="form-control">
                                            <span style="color:red;">@error('first_name'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Last Name:</h5></label>
                                            <input type="text" name="last_name" value="{{$customer->last_name}}" class="form-control">
                                            <span style="color:red;">@error('last_name'){{$message}}@enderror</span>
                                        </div>
                    
                                        <div class="form-group">
                                            <label><h5>Phone Number:</h5></label>
                                            <input type="text" name="phone_number" value="{{$customer->phone_number}}" class="form-control">
                                            <span style="color:red;">@error('phone_number'){{$message}}@enderror</span>
                                        </div>
                    
                                        
                                        </br>
                    
                                        <div class="text-center">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/customer" class="btn btn-primary">Cancel</a>
                                        </div>
                                                        
                    
                                    </form>
                        </div>
                    </div>
@endsection