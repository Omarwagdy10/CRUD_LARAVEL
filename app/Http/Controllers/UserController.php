<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcom_index(){
        $users = User::all();

        return view('users.index',['users'=>$users]);

    }

    //////////////////////////
    //<!--========================For Users=============================================  -->
    
    public function index_user(){
        $users = User::all();
        return view('users.index',['users'=>$users]);
    }
    public function create_user(){
        return view("users.create");
    }

    //to save user data 
    
    public function store_user(Request $request ){
       $users = User::create([
            "id"=> $request    ->id,
            'name' => $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            ]);

            return redirect()->route('user.index');
    }

    //<!--=========================For Posts============================================  -->
    //to get All posts
    public function index(){

        $allposts = post::all();
        return view("posts.index",["allposts"=>$allposts]);

    }

    //to create form which create product
    public function create (){
        $alluser = User::all();

        return view("posts.create",["alluser"=>$alluser]);

    }


    public function store(Request $request){

        post::create([
            "product_name" => $request->product_name,
            "product_price" => $request->product_price,
            "product_brand" => $request->product_brand,
            "product_details" => $request->product_name,
            "product_img" => $request->product_img,
            "user_id"=> $request->user_id
            ]);

           return redirect()->route('post.index');
    }

    public function show($id){

    $product = Post::find($id);
    return view('posts.product_details',['product'=>$product]);
        
    }


}
