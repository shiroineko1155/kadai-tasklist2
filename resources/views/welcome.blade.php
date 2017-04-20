@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <aside class="col-xs-4">
                {!! Form::open(['route' => 'tasklists.store']) !!}
                
                <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                 {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                 </div>
       
                 <div class="form-group">
                 {!! Form::label('content', 'タスク:') !!}
                 {!! Form::textarea('status', old('status'), ['class' => 'form-control', 'rows' => '5']) !!}
                 </div>
      
                {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-bloc']) !!}

                {!! Form::close() !!}
            </aside>
            
            <div class="col-xs-8">
                
                @if (count($tasklists) > 0)
                   @include('tasklists.tasklists', ['tasklists' => $tasklists])
                @endif
            </div>
        </div>
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the TaskLists</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            
        </div>
    </div>
    @endif
@endsection