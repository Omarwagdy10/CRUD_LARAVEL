@extends('welcome')

@section('index')
    <div style="justify-content: center " class=" d-flex my-5">

        <a href="{{ route('post.create') }}" type="button" class="btn btn-success p-2">Create product</a>
    </div>


    <div style="justify-content: space-between" class="row row-cols-1 row-cols-md-2 g-4 container mx-auto d-flex ">

        @foreach ($allposts as $post)
            <div class="col-5  col-xxl-3 col-xl-3 ">
                <div class="card h-100">
                    <div>
                        <img src="{{ $post->product_img }}" class="card-img-top h-100" alt="...">
                    </div>
                    <div class="card-body ">
                        <h6 class="card-text">product Name : {{ $post->product_name }}</h6>
                        <h6 class="card-text">product brand : {{ $post->product_brand }}</h6>
                        <h6 class="card-text">product price :${{ $post->product_price }}</h6>
                        <h6 class="card-text">product details : {{ $post->product_details }}</h6>
                        <h6 style="" class="card-text p-1">Posted by : {{ $post->user->name }}</h6>

                        <a href="{{ route('posts.show',['id'=>$post->id]) }}" type="button" class="btn btn-success">Show details</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
