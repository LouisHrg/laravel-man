{!! Form::open(['url' =>
  route('categories.delete', $category),
  'method' => 'delete'
  ]) !!}
<button class="btn btn-danger" type="submit">
  Delete
</button>
{!! Form::close() !!}
