@extends('dashboard')

@section('title')
	Transaction
@endsection

@section('content')

@if(session('addedOrder'))
	<script>
        alert('Transaction has been added successfully');
    	</script>
@endif

@if(session('deleteOrder'))
	<script>
        alert('Transaction has been deleted successfully');
    	</script>
@endif

<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Transactions
				<span class="text-muted pt-2 font-size-sm d-block">
				</span>
			</h3>
		</div>
										
		<div class="card-toolbar">


				<!--begin::Button-->
				<a href="{{route('daily')}}" class="btn btn-primary font-weight-bolder">
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
				</span>Daily</a>
				<!--end::Button-->

				&nbsp;&nbsp;&nbsp;
				<!--begin::Button-->
				<a href="{{route('weekly')}}" class="btn btn-primary font-weight-bolder">
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
				</span>Weekly</a>
				<!--end::Button-->

				&nbsp;&nbsp;&nbsp;
				<!--begin::Button-->
				<a href="{{route('monthly')}}" class="btn btn-primary font-weight-bolder">
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
				</span>Monthly</a>
				<!--end::Button-->
				
				&nbsp;&nbsp;&nbsp;
				
				<!--begin::Button-->
				<a href="{{route('order.order.create')}}" class="btn btn-primary font-weight-bolder">
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
				</span>Add Transaction</a>
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
							<span style="width: 108px;">Product</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Quantity</span>
						</th>

                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Price</span>
						</th>

						<th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Discounted Price</span>
						</th>

                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
                                          <span style="width: 108px;">Amount</span>
                                    </th>

                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Date</span>
						</th>


						<th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
							<span style="width: 125px;">Actions</span>
						</th>
					</tr>
				</thead>

				<tbody class="datatable-body" style="">

					@if(Auth::user()->type_id == 1)
						@forelse($orderDetails as $orderDetail)

							<tr data-row="0" class="datatable-row" style="left: 0px;">
							
									<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
										<span style="width: 108px;">{{$orderDetail->trans_id}}</span>
									</td>

									@foreach($products as $product)
										@if($product->id == $orderDetail->product_id)
											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$product->name}}</span>
											</td>
										@endif
									@endforeach

									<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
										<span style="width: 108px;">{{$orderDetail->order_qty}}</span>
									</td>

									<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
										<span style="width: 108px;">{{$orderDetail->price}}</span>
									</td>

									@foreach($products as $product)
										@if($product->id == $orderDetail->product_id)
											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$product->discounted_price * $orderDetail->order_qty}}</span>
											</td>
										@endif
									@endforeach

									<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
										<span style="width: 108px;">{{$orderDetail->amount}}</span>
									</td>

									<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
										<span style="width: 108px;">{{$orderDetail->order_date}}</span>
									</td>
									

									

									<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
										<span style="overflow: visible; position: relative; width: 125px;">

											@if(Auth::user()->type_id == 2)
												<a href="{{route('order.order.show', $orderDetail->id)}}" class="btn btn-sm btn-clean btn-icon mr-2"">						
													<span class="svg-icon svg-icon-md">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>	                            
																<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z" fill="#000000"></path>	                                        
															</g>	                                    
														</svg>    	                            
													</span>	                            
												</a>		
											@else						
											<form id="delete" action="{{route('order.order.destroy', $orderDetail->id)}}" method="POST">
												@csrf 
												{{method_field('DELETE')}}
											
												<a href="{{route('order.order.show', $orderDetail->id)}}" class="btn btn-sm btn-clean btn-icon mr-2"">						
													<span class="svg-icon svg-icon-md">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>	                            
																
																<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z" fill="#000000"></path>	                                        
															</g>	                                    
														</svg>    	                            
													</span>	                            
												</a>							  	

												<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
													<span class="svg-icon svg-icon-md">	                                
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>                                    
																<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
															</g>	                                
														</svg>	                            
													</span>							
												</a>							

																					
												<button class="btn btn-sm btn-clean btn-icon" title="Delete" type="submit">
													<span class="svg-icon svg-icon-md">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>	                            
													</span>							
												</buton>
											</form>	
											@endif					
										</span>
									</td>
								</tr>

							@empty 
								<h4>No Products Available</h4>
									
						@endforelse
					@else

						@foreach($transactions as $transaction)
							@if($transaction->user_id == Auth::user()->id)
								@forelse($orderDetails as $orderDetail)
									@if($orderDetail->trans_id == $transaction->id)
										
										<tr data-row="0" class="datatable-row" style="left: 0px;">
							
											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$orderDetail->trans_id}}</span>
											</td>

											@foreach($products as $product)
												@if($product->id == $orderDetail->product_id)
													<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
														<span style="width: 108px;">{{$product->name}}</span>
													</td>
												@endif
											@endforeach

											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$orderDetail->order_qty}}</span>
											</td>

											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$orderDetail->price}}</span>
											</td>

											@foreach($products as $product)
												@if($product->id == $orderDetail->product_id)
													<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
														<span style="width: 108px;">{{$product->discounted_price * $orderDetail->order_qty}}</span>
													</td>
												@endif
											@endforeach

											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$orderDetail->amount}}</span>
											</td>

											<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
												<span style="width: 108px;">{{$orderDetail->order_date}}</span>
											</td>
											

											

											<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
												<span style="overflow: visible; position: relative; width: 125px;">

													@if(Auth::user()->type_id == 2)
														<a href="{{route('order.order.show', $orderDetail->id)}}" class="btn btn-sm btn-clean btn-icon mr-2"">						
															<span class="svg-icon svg-icon-md">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>	                            
																		<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z" fill="#000000"></path>	                                        
																	</g>	                                    
																</svg>    	                            
															</span>	                            
														</a>		
													@else						
													<form id="delete" action="{{route('order.order.destroy', $orderDetail->id)}}" method="POST">
														@csrf 
														{{method_field('DELETE')}}
													
														<a href="{{route('order.order.show', $orderDetail->id)}}" class="btn btn-sm btn-clean btn-icon mr-2"">						
															<span class="svg-icon svg-icon-md">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>	                            
																		
																		<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z" fill="#000000"></path>	                                        
																	</g>	                                    
																</svg>    	                            
															</span>	                            
														</a>							  	

														<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
															<span class="svg-icon svg-icon-md">	                                
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>                                    
																		<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
																	</g>	                                
																</svg>	                            
															</span>							
														</a>							

																							
														<button class="btn btn-sm btn-clean btn-icon" title="Delete" type="submit">
															<span class="svg-icon svg-icon-md">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																		<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>	                            
															</span>							
														</buton>
													</form>	
													@endif					
												</span>
											</td>
										</tr>

									@endif

									@empty 
									<h4>No Products Available</h4>

								@endforelse
							@endif	
						@endforeach	
														
					@endif
				</tbody>
			</table>

			

		</div>
	</div>
<!--end: Datatable-->
</div>

@endsection