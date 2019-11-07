@extends('welcome')
@section('content')


<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4> Tìm kiếm </h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy {{count($product)}} Sản Phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img src="https://media3.scdn.vn/img3/2019/7_22/At5J9N_simg_b5529c_250x250_maxb.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												<span class="flash-del">{{$new->price}}</span>
												<span class="flash-sale">{{$new->promotionprice}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>             

@endsection