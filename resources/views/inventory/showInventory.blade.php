@extends('dashboard')

@section('title')
	Inventory
@endsection

@section('content')
@if(session('addProduct'))
	<script>
        alert('Productsaction has been added successfully');
    	</script>
@endif
@if(session('deleteProduct'))
	<script>
        alert('Product has been deleted successfully');
    	</script>
@endif

@if(session('editProduct'))
	<script>
        alert('Product has been updated successfully');
    	</script>
@endif
<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Products
				<span class="text-muted pt-2 font-size-sm d-block">
				</span>
			</h3>
		</div>
										
		<div class="card-toolbar">

			@if(Auth::user()->type_id == 1)
				<!--begin::Button-->
				<a href="{{route('inventory.inventory.create')}}" class="btn btn-primary font-weight-bolder">
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
				</span>Add Product</a>
				<!--end::Button-->
			
			@endif
		</div>
	</div>
	
	<div class="card-body">

		<!--begin: Datatable-->
		<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
			<table class="datatable-table" style="display: block;">
				<thead class="datatable-head">
					<tr class="datatable-row" style="left: 0px;">

						<th data-field="Country" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Name</span>
						</th>

						<th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Description</span>
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
                                          <span style="width: 108px;">Category</span>
                                    </th>

                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
							<span style="width: 108px;">Supplier</span>
						</th>


						<th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
							<span style="width: 125px;">Actions</span>
						</th>
					</tr>
				</thead>

				<tbody class="datatable-body" style="">

					@forelse($products as $product)

						@if($product->quantity_stock <= $product->critical_quantity)
							<tr data-row="0" class="datatable-row" style="left: 0px; background-color:#fc9898">
						@else
							<tr data-row="0" class="datatable-row" style="left: 0px;">
						@endif

								<td data-field="ShipDate" aria-label="8/27/2017" class="datatable-cell">
									<span style="width: 108px;">{{$product->name}}</span>
								</td>

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$product->description}}</span>
								</td>

								<td data-field="CompanyName" aria-label="Kris-Wehner" class="datatable-cell">
									<span style="width: 108px;">{{$product->quantity_stock}}</span>
								</td>

								<td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
									<span style="width: 108px;"><span class="label label-primary label-dot mr-2"></span>
										<span class="font-weight-bold text-primary">{{$product->price}}</span>
									</span>
								</td>

								<td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
									<span style="width: 108px;"><span class="label label-primary label-dot mr-2"></span>
										<span class="font-weight-bold text-primary">{{$product->discounted_price}}</span>
									</span>
								</td>

								@foreach($categories as $category)
									@if($product->category_id == $category->category_id)
										<td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
											<span style="width: 108px;"><span class="label label-primary label-dot mr-2"></span>
												<span class="font-weight-bold text-primary">{{$category->name}}</span>
											</span>
										</td>
									@endif
								@endforeach

								@foreach($suppliers as $supplier)
									@if($product->supplier_id == $supplier->supplier_id)
										<td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
											<span style="width: 108px;"><span class="label label-primary label-dot mr-2"></span>
												<span class="font-weight-bold text-primary">{{$supplier->company_name}}</span>
											</span>
										</td>
									@endif
								@endforeach

								<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
									<span style="overflow: visible; position: relative; width: 125px;">

										@if(Auth::user()->type_id == 2)
												
										@else						
										<form id="delete" action="{{route('inventory.inventory.destroy', $product->id)}}" method="POST">
											@csrf 
											{{method_field('DELETE')}}
										
																	  	

											<a href="{{route('inventory.inventory.edit', $product)}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
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
				</tbody>
			</table>

			

		</div>
	</div>
<!--end: Datatable-->
</div>

@endsection