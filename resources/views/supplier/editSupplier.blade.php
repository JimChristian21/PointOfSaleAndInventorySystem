@extends('dashboard')

@section('title')
      Edit Supplier
@endsection

@section('content')

<div class="card mb-3">            
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    
                                <form method="POST" action="{{route('supplier.supplier.update', $supplier->id)}}">
                                        @csrf                                       
                                        {{method_field('PUT')}}

                                        <div class="form-group">
                                            <label><h5>Company Name:</h5></label>
                                            <input type="text" name="company_name" value="{{$supplier->company_name}}" class="form-control">
                                            <span style="color:red;">@error('company_name'){{$message}}@enderror</span>
                                        </div>

                                        <br/>

                                        <h4>Location</h4>

                                        <br/>
                                        

                                        <div class="form-group">
                                            <label><h5>Barangay:</h5></label>
                                            <input type="text" name="barangay" value="{{$location->barangay}}" class="form-control">
                                            <span style="color:red;">@error('barangay'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Municipality:</h5></label>
                                            <input type="text" name="municipality" value="{{$location->municipality}}" class="form-control">
                                            <span style="color:red;">@error('municipality'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Province:</h5></label>
                                            <input type="text" name="province" value="{{$location->province}}" class="form-control">
                                            <span style="color:red;">@error('province'){{$message}}@enderror</span>
                                        </div>

                                          <br/>

                                        <div class="form-group">
                                            <label><h5>Phone Number:</h5></label>
                                            <input type="text" name="phone_number" value="{{$supplier->phone_number}}" class="form-control">
                                            <span style="color:red;">@error('phone_number'){{$message}}@enderror</span>
                                        </div>
                    
                                        
                                        </br>
                    
                                        <div class="text-center">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/supplier" class="btn btn-primary">Cancel</a>
                                        </div>
                                                        
                    
                                    </form>
                        </div>
                    </div>
@endsection