@extends('layouts.admin')

@section('content')

<div class="row col-12">

    <div class="p-2 col-12 col-sm-10 col-md-6  mx-auto mt-3 text-center">
        <div class="cardUser mx-auto card col-12 col-lg-8">
           <a href="{{route('user.index')}}">
                <div class="card-body">
                    <img src="./wallpaper/admins.png" alt="" >
                    <p>بەكارهێنەر</p>
                </div>   
            </a>
        </div>
    </div>
    
    <div class="p-2 col-12 col-sm-10 col-md-6  mx-auto mt-3 text-center">
        <div class="cardUser mx-auto card col-12 col-lg-8">
           <a href="{{route('foodsAndDrinks.index')}}">
                <div class="card-body">
                    <img src="./wallpaper/fastfood.png" alt="" >
                    <p>خواردن و خواردنەوەكان</p>
                </div>   
            </a>
        </div>
    </div>
    
    
    <div class="p-2 col-12 col-sm-10 col-md-6  mx-auto mt-3 text-center">
        <div class="cardUser mx-auto card col-12 col-lg-8">
           <a href="{{route('backUpController.index')}}">
                <div class="card-body">
                    <img src="./wallpaper/storage.png" alt="" >
                    <p>باكئەب</p>
                </div>   
            </a>
        </div>
    </div>
    
    
    <div class="p-2 col-12 col-sm-10 col-md-6  mx-auto mt-3 text-center">
        <div class="cardUser mx-auto card col-12 col-lg-8">
           <a href="{{route('foodsAndDrinks.index')}}">
                <div class="card-body">
                    <img src="./wallpaper/raport.png" alt="" >
                    <p>ڕاپۆرت</p>
                </div>   
            </a>
        </div>
    </div>
    
    
    
    
    

</div>


@endsection
