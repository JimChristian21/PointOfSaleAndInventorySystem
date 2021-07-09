@extends('dashboard')

@section('title')
      Create Customer
@endsection

@section('content')

<div class="card mb-3">            
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    
                                    <form method="POST" action="{{route('customer.customer.store')}}">
                                        @csrf
                    
                                       
                    
                                        <div class="form-group">
                                            <label><h5>First Name:</h5></label>
                                            <input type="text" name="first_name" placeholder="Name" class="form-control">
                                            <span style="color:red;">@error('first_name'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Last Name:</h5></label>
                                            <input type="text" name="last_name" placeholder="Name" class="form-control">
                                            <span style="color:red;">@error('last_name'){{$message}}@enderror</span>
                                        </div>
                    
                                        <div class="form-group">
                                            <label><h5>Phone Number:</h5></label>
                                            <input type="text" name="phone_number" placeholder="Description" class="form-control">
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