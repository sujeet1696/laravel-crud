@extends('layout.master')

@section('body')
  <div class="container">
  		<div class="d-flex flex-row justify-content-end ">
  			<button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#myModal">
          <a href="{{ route('posts.add')}}">Click To Insert</a>
  			</button>
  		</div>

  		<div >
  			<h2 style="color: #062f4f; font-family: 'Cormorant Unicase', serif;" class="font-weight-bold mb-4"> All Records </h2>
  			<div id="records_content">	</div>
  		</div>
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Content</th>
            <th>created_at</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <button type="button" class="btn btn-warning text-white"><a href="{{ route('posts.edit', $post->id )}}">Edit</a></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger text-white"><a href="{{ route('posts.delete', $post->id )}}">Delete</a></button>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center">No records found</td>
              </tr>
            @endforelse
      </tbody>
    </table>
    {{ $posts->links() }}
  </div>
@endsection('body')
