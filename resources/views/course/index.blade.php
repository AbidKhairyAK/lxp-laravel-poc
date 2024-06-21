@extends('app')

@section('title', 'Course List')

@section('content')
<h1 class="pb-6 text-3xl text-black">Course List</h1>

<div class="card bg-base-100 shadow-xl">
	<section class="card-body">

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Video</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($items as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->title }}</td>
						<td>{{ $item->video }}</td>
						<td>
							<a
								title="Show"
								class="btn btn-primary btn-xs"
								href="{{ route('courses.show', $item->id) }}"
							>
								<x-lucide-play class="h-3 w-3" />
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		{{ $items->links() }}
	</section>
</div>
@endsection