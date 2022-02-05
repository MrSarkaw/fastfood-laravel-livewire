@extends('layouts.admin')

@section('content')
    <div class="row col-10 col-md-6 mx-auto">    
       
        <ul class="p-3 mt-4 col-12" 
            style=" box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
            -2px -2px 5px rgba(255, 255, 255, 0.2) ;border-radius:20px; " >
            
         {!! Form::model($food,['method'=>'PATCH','url'=>('foodsAndDrinks/'.$food->id)]) !!}
                    <div class="inputDevs col-12 col-sm-9   mx-auto mt-2">
                        {!! Form::Text('name',null,['class'=>'inp mt-2','placeholder'=>'ناو']) !!}
                    </div>   

                    <div class="inputDevs col-12 col-sm-9  mx-auto mt-2">
                        {!! Form::number('price',null,['class'=>'inp mt-2','placeholder'=>'نرخ']) !!}
                    </div>
    
                        <button class="btns col-7 mt-3" style=" ">تازەكردنەوە</button>

         {!! Form::close() !!}
        </ul>
    </div> 


@endsection
