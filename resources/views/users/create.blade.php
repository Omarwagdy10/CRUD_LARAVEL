
  {{--  --}}

  @extends('welcome')

@section('user_form')
<form method="post" action="{{ route('users.store')}}" class="row g-3">  
  @csrf  

  <div class="col-md-12">
      <label for="inputEmail4" class="form-label">name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-12">
      <label for="inputPassword4" class="form-label">password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>
@endsection