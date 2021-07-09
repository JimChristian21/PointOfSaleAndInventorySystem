@extends('dashboard')

@section('title')
	Profie
@endsection

      

@section('content')




<div class="card card-custom">
	
	<div class="card-body">

		<!--begin: Datatable-->
		<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
			
                  <h4>Name: <span class="text-primary"> {{$employee->first_name}} {{$employee->last_name}}</span></h4>

                  <br/>

                  <h4>Email: <span class="text-primary"> {{$employee->email}}</span></h4>

                  <br/>

                  <h4>Phone Number: <span class="text-primary"> {{$employee->phone_number}}</span></h4>

                  <br/>

                  <h4>Location: <span class="text-primary"> {{$location->barangay}}, {{$location->municipality}}, {{$location->province   }}</span></h4>

                  <br/>

                  <h4>Type: <span class="text-primary"> {{$type->type}}</span></h4>

                  <br/>

                  

                  


		</div>
	</div>
<!--end: Datatable-->
</div>

@endsection