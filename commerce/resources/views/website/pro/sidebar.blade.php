

<div class="col-12 col-sm-3">
		<div class="card bg-light mb-3">
			<div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
			<ul class="list-group category_block">
				<li class="list-group-item"><a href="/products/showall" class="btn btn-light btn-block">All Items</a></li>
				<li class="list-group-item"><a href="/products/categories/samsung" class="btn btn-light btn-block">Samsung</a></li>
				<li class="list-group-item"><a href="/products/categories/huawei" class="btn btn-light btn-block">Huawei</a></li>
				<li class="list-group-item"><a href="/products/categories/oppo" class="btn btn-light btn-block">OPPO</a></li>
				<li class="list-group-item"><a href="/products/categories/motrola" class="btn btn-light btn-block">Motrola</a></li>
				<li class="list-group-item"><a href="/products/categories/iphone" class="btn btn-light btn-block">IPhone</a></li>
			</ul>
			
			
			
			
			
			@if(Auth::user())
			<hr>
			<div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-list"></i>User Information</div>
			<ul class="list-group category_block">
				<li class="list-group-item"><a href="/UserEditInfo" class="btn btn-light btn-block">Edit Personal Information</a></li>
				
				</ul>
				
				@endif
		</div>
		
	
	
	</diV>
