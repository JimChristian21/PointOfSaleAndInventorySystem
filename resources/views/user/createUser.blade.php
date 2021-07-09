@extends('dashboard')

@section('title')
      Create User
@endsection

@section('content')

<div class="card mb-3">            
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    
                                    <form method="POST" action="{{route('user.user.store')}}">
                                        @csrf
                    
                                        <div class="form-group">
                                            <label><h5>First Name:</h5></label>
                                            <input type="text" name="first_name" placeholder="First Name" class="form-control">
                                            <span style="color:red;">@error('first_name'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Last Name:</h5></label>
                                            <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                                            <span style="color:red;">@error('last_name'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Phone Number:</h5></label>
                                            <input type="text" name="phone_number" placeholder="Phone Number" class="form-control">
                                            <span style="color:red;">@error('phone_number'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Email:</h5></label>
                                            <input type="text" name="email" placeholder="Email" class="form-control">
                                            <span style="color:red;">@error('email'){{$message}}@enderror</span>
                                        </div>

                                        

                                        <div class="form-group">
                                            <label><h5>Password:</h5></label>
                                            <input type="password" name="password" class="form-control">
                                            <span style="color:red;">@error('password'){{$message}}@enderror</span>
                                        </div>
                    
                                        <br/>

                                        <h4>Location</h4>

                                        <br/>
                                        
                                        <div class="form-group">
                                            <label><h5>Barangay:</h5></label>
                                            <input type="text" name="barangay" placeholder="Barangay" class="form-control">
                                            <span style="color:red;">@error('barangay'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Municipality:</h5></label>
                                            <input type="text" name="municipality" placeholder="Municipality" class="form-control">
                                            <span style="color:red;">@error('municipality'){{$message}}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label><h5>Province:</h5></label>
                                            <input type="text" name="province" placeholder="Province" class="form-control">
                                            <span style="color:red;">@error('province'){{$message}}@enderror</span>
                                        </div>
                     
                                        </br>

                                          <div class="form-group">
                                                <label for="type"><h5>Type:</h5></label>
                                                <select id="type" name="type">
                                                      @foreach($types as $type)
                                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                                      @endforeach
                                                </select>
                                          </div>
                    
                                        <div class="text-center">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/customer" class="btn btn-primary">Cancel</a>
                                        </div>
                                                        
                    
                                    </form>
                        </div>
                    </div>
@endsection