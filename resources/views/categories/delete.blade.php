{!! Form::open(['url' =>
  route('categories.destroy', $category),
  'method' => 'delete'
  ]) !!}
<button class="btn btn-danger" type="submit">
  Delete
</button>
{!! Form::close() !!}
