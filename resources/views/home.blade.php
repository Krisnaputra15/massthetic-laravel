@extends('template.awal')
@section('judul')
Massthetic Home
@endsection
@section('konten')
<!-- SECTION -->
<div class="section">
@if(Session::has('alert_pesan'))
            <div class="alert alert-success">
            {{Session('alert_pesan')}}
            </div>
            @endif
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					@foreach($kategori as $k)
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('img/kategori/'.$k->gambar)}}" alt="">
							</div>
							<div class="shop-body">
								<h3>{{$k->nama_kategori}}<br>Collection</h3>
								<a href="{{$k->link}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									@foreach($kategori as $k)
									<li><a data-toggle="tab" href="#tab1">{{$k->nama_kategori}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
									    @foreach($barang as $b)
										<div class="product">
											<div class="product-img">
												<img src="{{asset('img/'.$b->id_kategori.'/'.$b->foto)}}" alt="Gambar">
												<div class="product-label">
                                                   
													
                                                    <span class="new">NEW</span>
                                                    
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">{{!empty($b->kategori_barang->nama_kategori) ? $b->kategori_barang->nama_kategori : '-'}}</p>
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
													
													
												</div>
											</div>
											
                                        </div>
                                        @endforeach
										<!-- /product -->

																		</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

	

	

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /NEWSLETTER -->
        @stop