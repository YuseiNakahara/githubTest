@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">ToDo編集</h2>
{!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
  <div class="form-group">
    {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
  </div>
  <input type = 'hidden' name = 'finished_flg' value = '0'>
  @if ($todo->finished_flg)
    <input type = 'checkbox' onclick = 'this.form.finished_flg.value = this.checked ? 1 : 0' checked="checked">
  @else
    <input type = 'checkbox' onclick = 'this.form.finished_flg.value = this.checked ? 1 : 0'>
  @endif
  <span>完了</span>
  {!! Form::submit('更新', ['class' => 'btn btn-success float-right']) !!}
{!! Form::close() !!}

@endsection
