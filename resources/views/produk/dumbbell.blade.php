@extends('template.awal')
@section('judul')
Dumbbell Product
@endsection
@section('konten')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{url('/')}}">Home</a></li>
							<li class="active"><a href="#">Dumbbell ({{$barang2}} found)</a></li>
							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
                               
								<div class="input-checkbox">
									
									<label for="category-1">
										<span></span>
										<a href="{{url('produk-all')}}">All</a>
										
									</label>
                                </div>
                                <div class="input-checkbox">
									
									<label for="category-1">
										<span></span>
										<a href="{{url('produk-barbell')}}">Barbell</a>
										
									</label>
                                </div>
                                <div class="input-checkbox">
									
									<label for="category-1">
										<span></span>
										<a href="{{url('produk-dumbbell')}}">Dumbbell</a>
										
									</label>
                                </div>
                                <div class="input-checkbox">
									
									<label for="category-1">
										<span></span>
										<a href="{{url('produk-plates')}}">Plates</a>
										
									</label>
                                </div>
                                <div class="input-checkbox">
									
									<label for="category-1">
										<span></span>
										<a href="{{url('produk-forlegs')}}">For Legs</a>
										
									</label>
                                </div>
                                <div class="input-checkbox">
									
									<label for="category-1">
										<span></span>
										<a href="{{url('produk-gymset')}}">Gym Set</a>
										
									</label>
								</div>

								
							</div>
						</div>
						<!-- /aside Widget -->

					
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
					
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
                            @if($barang2 == 0)
                            <p>No item yet, please wait for further update</p>
                            @else
                            <!-- product -->
                            @foreach($barang as $b)
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{asset('img/2/'.$b->foto)}}" alt="{{$b->nama}}">
										<div class="product-label">
											
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Dumbbell</p>
										<h3 class="product-name"><a href="{{url('/product-'.$b->id)}}">{{$b->nama}}</a></h3>
										<h4 class="product-price">${{$b->harga}}.00</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
									@if($b->jumlah == 0)
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Out of Stock</button>
								@else
								@if(Session('login_status') == true )
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('addcart-'.$b->id)}}"> Add to Cart</a></button>
												@else
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('login')}}"> Login First</a></button>
												@endif
								@endif
									</div>
								</div>
                            </div>
                            @endforeach
                            @endif
							<!-- /product -->

						
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
                        @if($barang2 == 0)

                        @else
                            <span class="store-qty">Showing {{$barang2}} products</span>
                            @endif
							
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /SECTION -->
@endsection