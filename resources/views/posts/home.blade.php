@extends('master')
@section('title', 'View all post')
@section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2> Tickets </h2>
		</div>
		@if($posts ->isEmpty())
		@else
			<table class="table">
					<thead>
						<tr>
						<th>ID</th>
						<th>Title</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td>{!! $post->id !!} </td>
								<td>{!! $post->title !!}</td>
								
							</tr>
						@endforeach
					</tbody>
			</table>
		@endif
	</div>
</div>
@endsection