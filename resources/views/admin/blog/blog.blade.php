@extends('admin.layouts.app')

@section('head')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Blog List</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item">
						@can('blogs.create', Auth::user())  
							<a class="btn btn-sm btn-primary" href="{{ route('blog.create') }}">Create New Blog</a>
						@endcan
					</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
@endsection


@section('main-content')
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Your all blogs</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Title</th>
								<th>Slug</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($blogs as $blog)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ str_limit($blog->title, 30) }}</td>
									<td>{{ str_limit($blog->slug, 30) }}</td>
									<td>
										{{ $blog->status == 1 ? 'published' : 'Not published' }}
									</td>
									<td>
										@can('blogs.update', Auth::user())  
											<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit/Show</a>
										@endcan

										@can('blogs.delete', Auth::user())
										    <form id="delete-blog-{{ $blog->id }}" style="display: none;" method="POST" action="{{ route('blog.destroy', $blog->id) }}">
												@csrf
												@method('DELETE')
											</form>
											<a href="" onclick="if(confirm('Are you sure want to delete')){event.preventDefault();document.getElementById('delete-blog-{{ $blog->id }}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-danger">Delete</a>
										@endcan
									</td>
								</tr>
							@endforeach
							
						</tbody>
						<tfoot>
							<tr>
								<th>S.No</th>
								<th>Title</th>
								<th>Slug</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
@endsection


@section('script')
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
	$(function () {
		$("#example1").DataTable();
	});
</script>
@endsection

