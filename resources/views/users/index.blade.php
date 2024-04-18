@extends('welcome')

@section('user_index')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($users as $user )
          
      <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
      </tr>
      
      @endforeach



  </tbody>

</table>

<div style="justify-content:center" class="d-flex ">
  <a href="{{ route('user.create') }}" type="button" class="btn w-25 btn-success">Add user</a>

</div>

@endsection