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
				<h1>Contact List</h1>
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
					<h3 class="card-title">Your all Contact Messages</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($contacts as $contact)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $contact->name }}</td>
									<td>{{ $contact->email }}</td>
									<td>
										<form id="contact-{{ $contact->id }}" style="display: none;" method="POST" action="{{ route('message.update', $contact->id) }}">
											@csrf
											@method('PUT')
										</form>
										<a href="{{ route('message.update', $contact->id) }}" onclick="event.preventDefault();document.getElementById('contact-{{ $contact->id }}').submit();" class="btn btn-sm btn-warning">
											@if ($contact->seen == 0)
						                      Unseen
						                    @elseif ($contact->seen == 1)
						                      Seen
						                    @endif
										</a>
										<form id="delete-contact-{{ $contact->id }}" style="display: none;" method="POST" action="{{ route('message.destroy', $contact->id) }}">
											@csrf
											@method('DELETE')
										</form>
										<a href="" onclick="if(confirm('Are you sure want to delete')){event.preventDefault();document.getElementById('delete-contact-{{ $contact->id }}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
							@endforeach
							
						</tbody>
						<tfoot>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Email</th>
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

