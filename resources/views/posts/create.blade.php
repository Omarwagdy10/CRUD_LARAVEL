
@extends('welcome')

@section('create_product')

<form method="POST" action="{{ route('post.store') }}" class="row g-3 container mx-auto my-4">
@csrf

    
    <div class="col-md-6 col-xxl-12">
      <label for="inputEmail4" class="form-label">product_name</label>
      <input type="text" name="product_name" value="" class="form-control" id="inputEmail4">
    </div>

    <div class="col-md-6 col-xxl-12">
        <label for="inputEmail4" class="form-label">product_price</label>
        <input type="text" name="product_price" value="" class="form-control" id="inputEmail4">
    </div>
      
      <div class="col-md-6 col-xxl-12">
        <label for="inputEmail4" class="form-label">product_brand</label>
        <input type="text" name="product_brand" value="" class="form-control" id="inputEmail4">
      </div>
      
      <div class="col-md-6 col-xxl-12">
        <label for="inputEmail4" class="form-label">product_details</label>
        <input type="text" name="product_details" value="" class="form-control" id="inputEmail4">
      </div>

      <div class="col-md-6 col-xxl-12">
        <label for="inputEmail4" class="form-label">product_img</label>
        <input type="text" name="product_img" value="" class="form-control" id="inputEmail4">
      </div>

      <div class="input-group">
        <select name="user_id" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
          <option selected>Choose User...</option>
          @foreach ( $alluser as $user )
          <option   value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach

        </select>
        <button class="btn btn-outline-secondary" type="button">Button</button>
      </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
</form>

@endsection