@extends ('layout.master')

@section ('content')

    <div class="row">
        <div class="col-lg-6 col-centered mt-5">
            <form action="{{ route('todo.update') }}" method="post">
                {{ csrf_field() }}
                <input name="todo" value="{{ $todo->todo }}" class="form-control input-lg">
                @if ($errors->has('todo'))
                    <p class="alert-warning">{{ $errors->first('todo') }}</p>
                @endif
                <button type="submit" class="mt-3 btn btn-success">Update</button>
            </form>
        </div>
    </div>

@endsection