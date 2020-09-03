{!! Form::open(['url' =>
  route('posts.delete', $post),
  'method' => 'delete'
  ]) !!}
<button class="btn btn-danger" type="submit">
  Delete
</button>
{!! Form::close() !!}
