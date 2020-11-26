<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
				<div class="pull-left image">
					<img src="/images/{{Auth::user()->image}}" class="img-circle" alt="User Image">
					{{--  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">  --}}
				</div>
				<div class="pull-left info">
				<p>{{Auth::user()->name}}</p> 
					<a href="{{url('/')}}"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li class="treeview">
					<a href="{{route('categories.index')}}">
							<i class="fa fa-share"></i> <span>Category</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
					</a>
				</li>

				<li class="treeview">
					<a href="{{route('book.index')}}">
						<i class="fa fa-share"></i> <span>Books</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>

				<li class="treeview">
					<a href="{{route('issue.index')}}">
						<i class="fa fa-share"></i> <span>Issue Book</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>

				<li class="treeview">
					<a href="{{route('user.index')}}">
						<i class="fa fa-share"></i> <span>Users</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>
				<li class="treeview">
					<a href="{{route('author.index')}}">
						<i class="fa fa-share"></i> <span>Authors</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>
				<li class="treeview">
					<a href="{{route('publisher.index')}}">
						<i class="fa fa-share"></i> <span>Publishers</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>
				<li class="treeview">
					<a href="{{route('visitor.index')}}">
						<i class="fa fa-share"></i> <span>Visitors</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>
				<li class="treeview">
					<a href="{{route('log.index')}}">
						<i class="fa fa-share"></i> <span>Logs</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				</li>
			</ul>
	</section>
	<!-- /.sidebar -->
</aside>