@extends('dashboard')

@section('title')
Transaction
@endsection

@section('content')
<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Order Details
				<span class="text-muted pt-2 font-size-sm d-block">
				</span>
			</h3>
		</div>
										
		<div class="card-toolbar">

				
				<!--begin::Button-->
				<a href="/order" class="btn btn-primary font-weight-bolder">
				<span class="svg-icon svg-icon-md">

				<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24"></rect>
						<circle fill="#000000" cx="9" cy="15" r="6"></circle>
						<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
					</g>
				</svg>
				
				<!--end::Svg Icon-->
				</span>Back to Transactions</a>
				<!--end::Button-->

		</div>
	</div>
	
	<div class="card-body">

		<!--begin: Datatable-->
		<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
			<table class="datatable-table" style="display: block;">
				<thead class="datatable-head">
					<tr class="datatable-row" style="left: 0px;">

						<th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Transaction ID</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Customer Name</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Product</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Quantity</span>
						</th>
					
						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Payment</span>
						</th>

                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Change</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Amount Paid</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Employee</span>
						</th>

                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Date</span>
						</th>

					</tr>
				</thead>

				<tbody class="datatable-body" style="">

						<tr data-row="0" class="datatable-row" style="left: 0px;">
						

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$transaction->id}}</span>
								</td>

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$customer->first_name}} {{$customer->last_name}}</span>
								</td>

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$product->name}}</span>
								</td>

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$order->order_qty}}</span>
								</td>


								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$transaction->payment}}</span>
								</td>

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$transaction->change}}</span>
								</td>

							
								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$transaction->amount_paid}}</span>
								</td>

								@foreach($users as $user)
									@if($transaction->user_id == $user->id)
										@foreach($employees as $employee)
											@if($employee->id == $user->employee_id)
												<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
													<span style="width: 108px;">{{$employee->first_name}} {{$employee->last_name}}</span>
												</td>
											@endif
										@endforeach
									@endif
										
								@endforeach

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$transaction->trans_date}}</span>
								</td>
								

								

								
							</tr>

				</tbody>
			</table>

			

		</div>
	</div>
<!--end: Datatable-->
</div>

@endsection