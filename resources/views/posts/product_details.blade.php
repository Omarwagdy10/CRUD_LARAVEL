@extends('welcome')


@section('show_product')

    
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4  w-50">
        <img src="{{ $product->product_img}}" class="img-fluid rounded-start h-100 w-100" alt="...">
      </div>
      <div class="col-md-8 w-50">
        <div class="card-body">
          <h5 class="card-title">{{ $product->product_name }}</h5>
          <p class="card-text">{{ $product->product_brand }}</p>
          <p class="card-text">{{ $product->product_price }}</p>
          <p class="card-text">{{ $product->product_details }}</p>
        </div>
      </div>
    </div>

</div>


@endsection