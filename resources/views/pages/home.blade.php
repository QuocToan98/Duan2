@extends('welcome')
@section('content')

<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4> Sản Phẩm Mới </h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy {{count($new_sanpham)}} Sản Phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($new_sanpham as $new)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{asset('chitietsanpham').'/'.$new->id}}"><img src="image/{{$new->image}}" alt=""></a>
										</div>
										<div class="group-product">
											<div class="single-item-body">
												<p class="single-item-title">{{$new->name}}</p>
												<p class="single-item-price">
													<span class="flash-del">{{$new->price}}</span>
													<span class="flash-sale">{{$new->promotionprice}}</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="{{asset('themgiohang').'/'.$new->id}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{asset('chitietsanpham')}}">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>	
									</div>
								</div>
							@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4> Sản Phẩm Được Ưa Thích</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{asset('chitietsanpham')}}"><img src="https://media3.scdn.vn/img3/2019/7_22/Z7U5kS_simg_b5529c_250x250_maxb.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{asset('chitietsanpham')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="{{asset('chitietsanpham')}}"><img src="https://media3.scdn.vn/img3/2019/9_14/qHaSVY_simg_b5529c_250x250_maxb.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span class="flash-del">$34.55</span>
												<span class="flash-sale">$33.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{asset('chitietsanpham')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{asset('chitietsanpham')}}"><img src="https://media3.scdn.vn/img2/2018/10_16/D3bDC6_simg_b5529c_250x250_maxb.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{asset('chitietsanpham')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{asset('chitietsanpham')}}"><img src="https://media3.scdn.vn/img3/2019/9_9/32rYRt_simg_b5529c_250x250_maxb.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{asset('chitietsanpham')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="space40">&nbsp;</div>
							
							</div>
						</div> <!-- .beta-products-list -->

						<!-- Section Banner Home -->
						<div class="row">
							<div class="col-12 col-md-6">
								<img class="vov zoom-in-left t-2" src="http://www.theparadeswindon.co.uk/wp-content/uploads/2018/06/BW4341-The-Parade-Summer-Fashion-Web-Banner.jpg" alt="Baner Fashion NTV">
							</div>
							<div class="col-12 col-md-6">
							<img class="vov zoom-in-right t-3" src="https://thebackpackingwayfarers.files.wordpress.com/2018/08/bags-banner-slide-show-final.jpg?w=768" alt="Baner Fashion NTV" style="height:198px">
							</div>  
						</div>
						
						 <!-- normal -->
    
    <!-- end normal -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->



@endsection
					