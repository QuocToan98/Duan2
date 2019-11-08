<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{route('dashboard')}}">Fashion NTV Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh Mục <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{asset('category')}}">Danh sách danh mục</a></li>
                  <li><a href="{{asset('editcategory')}}">Sửa Danh Mục</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{asset('product')}}">Danh sách sản phẩm</a></li>
                  <li><a href="{{asset('addproduct')}}">Thêm Sản Phẩm</a></li>
                  <li><a href="{{asset('editproduct')}}">Sửa Sản Phẩm</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Người Dùng <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Người Dùng</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                </ul>
              </li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->