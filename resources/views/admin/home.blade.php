@extends('layouts.admin_dashboard');
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
			Admin Dashboard
		{{--  <small>Version 2.0</small>  --}}
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Info boxes -->
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-align-center"></i></span>

				<div class="info-box-content">
					<a href= "{{route('categories.index')}}" > 
					<span class="info-box-text">Categories </span>
					<span class="info-box-number">{{$categories_count}}</span>
					</a> 	
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>

				<div class="info-box-content">
					<a href= "{{route('book.index')}}" > 
					<span class="info-box-text">Books</span>
					<span class="info-box-number">{{$books_count}}</span>
					</a> 
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->

		<!-- fix for small devices only -->
		<div class="clearfix visible-sm-block"></div>

		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

				<div class="info-box-content">
					<a href= "{{route('visitor.index')}}" >
					<span class="info-box-text">Visitors</span>
					<span class="info-box-number">{{$visitors_count}}</span>
					</a> 
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

				<div class="info-box-content">
						<a href= "{{route('visitor.index')}}" >
					<span class="info-box-text">Members</span>
					<span class="info-box-number">{{$users_count}}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>
	
	<!-- /.row -->

	<!-- Info boxes -->
	<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-pencil"></i></span>

					<div class="info-box-content">
							<a href= "{{route('visitor.index')}}" >
						<span class="info-box-text">Authors </span>
						<span class="info-box-number">{{$authors_count}}<small>%</small></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>

					<div class="info-box-content">
							<a href= "{{route('visitor.index')}}" >
						<span class="info-box-text">Issued Book</span>
						<span class="info-box-number">{{$issues_count}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->

			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-share-square"></i></span>

					<div class="info-box-content">
							<a href= "{{route('visitor.index')}}" >
						<span class="info-box-text">posts</span>
						<span class="info-box-number">{{$posts_count}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-comment"></i></span>

					<div class="info-box-content">
							<a href= "{{route('visitor.index')}}" >
						<span class="info-box-text">Commensts</span>
						<span class="info-box-number">{{$comments_count}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-comment"></i></span>

					<div class="info-box-content">
							<a href= "{{route('visitor.index')}}" >
						<span class="info-box-text">Publishers</span>
						<span class="info-box-number">{{$publishers_count}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-comment"></i></span>

					<div class="info-box-content">
						{{--  <a href= "{{route('cupbord.index')}}" >  --}}
						<span class="info-box-text">Cupbord</span>
						<span class="info-box-number">{{$cupbords_count}}</span>
						</a>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		
		<!-- /.row -->


	<!-- Main row -->
	<div class="row">
		<!-- Left col -->
		<div class="col-md-8">
			
			<!-- /.box -->
			<div class="row">
				<div class="col-md-6">
					<!-- USERS LIST -->
					<div class="box box-danger">
						<div class="box-header with-border">
							<h3 class="box-title">Latest Registered Members</h3>

							<div class="box-tools pull-right">
								<span class="label label-danger">8 New Members</span>
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
								</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body no-padding">
							<ul class="users-list clearfix">
								@foreach($latest_registered_members as $member)
								<li>
									<img src="/images/{{$member->image}}" alt="User Image">
									<a class="users-list-name" href="{{route('user.show',$member->id)}}">{{$member->name}}</a>
									<span class="users-list-date">{{$member->created_at}}</span>
								</li>
								@endforeach
							</ul>
							<!-- /.users-list -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer text-center">
							<a href="{{route('user.index')}}" class="uppercase">View All Users</a>
						</div>
						<!-- /.box-footer -->
					</div>
					<!--/.box -->
				</div>
				<!-- /.col -->

				<div class="col-md-6">
					<!-- USERS LIST -->
					<div class="box box-danger">
						<div class="box-header with-border">
							<h3 class="box-title">Latest Visitors </h3>

							<div class="box-tools pull-right">
								<span class="label label-danger">8 New Visitors </span>
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
								</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body no-padding">
							<ul class="users-list clearfix">

									@foreach($latest_visitors as $visitor)
									<li>
										
										<img src="/images/{{$visitor->image}}" alt="User Image">
										<a class="users-list-name" href="{{route('visitor.show',$visitor->id)}}">{{$visitor->name}}</a>
										<span class="users-list-date">{{$visitor->created_at}}</span>
									</li>
									@endforeach
								
							</ul>
							<!-- /.users-list -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer text-center">
							<a href="{{route('visitor.index')}}" class="uppercase">View All visitors </a>
						</div>
						<!-- /.box-footer -->
					</div>
					<!--/.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

			<!-- TABLE: LATEST logs  -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Latest Logs</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
							<tr>
								<th> Num</th>
								<th>Admin </th>
								<th>Activity log</th>
							</tr>
							</thead>
							<tbody>
              <?php $i = 0;  ?> 
              @foreach($latest_logs as $log )  
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{$log->admin_name}}</td>
								<td>{{$log->logActivity}}</td>
              </tr>
              @endforeach
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<a href="{{route('log.index')}}" class="btn btn-sm btn-info btn-flat pull-left">View All Logs </a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->

		<div class="col-md-4">
			<!-- PRODUCT LIST -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Recently Added Books</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<ul class="products-list product-list-in-box">
            @foreach($latest_books as $book )
						<li class="item">
							<div class="product-img">
								<img src="/images/{{$book->Bookcover}}" alt="book  Image">
							</div>
							<div class="product-info">
								<a href="{{route( 'book.show' , $book->id)}}" class="product-title">{{$book->title}}
									<span class="label label-warning pull-right">{{$book->total}}</span></a>
								<span class="product-description">
                    {{$book->created_at}}
										</span>
							</div>
            </li>
            @endforeach
						<!-- /.item -->
					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a href="{{route('book.index')}}" class="uppercase">View All Books</a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->

@endsection
