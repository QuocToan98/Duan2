@extends('admin.dashboard')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
						@include('errors.note')
						<form method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->name}}">
							</div>
							<div class="form-group">
								<button type="sumbit" name="sumbit" class="form-control btn btn-primary" placeholder="" value="Sửa"> Sửa</button>
							</div>
							<div class="form-group">
								<a href="{{asset('category')}}" class="form-control btn btn-danger">Hủy Bỏ</a> 
							</div>
							{{csrf_field()}}
						</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection