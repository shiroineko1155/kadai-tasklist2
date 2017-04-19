@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">       
       
  <table class="table table-borderded">
      <tr>
          <td>id</td>
          <td>{{ $tasklist->id }}</td>
      </tr>
      <tr>
          <th>ステータス</th>
          <td>{{ $tasklist->status }}</td>
      </tr>
      <tr>
          <th>タスク</th>
          <td>{{ $tasklist->content }}</td>
      </tr>
  </table>
  
</div>
</div>

@endsection