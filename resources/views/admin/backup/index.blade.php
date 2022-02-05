@extends('layouts.admin')

@section('content')
    <div class=" col-12 col-md-5 mx-auto">    
       
        <div class="divBtns">
          {!! Form::open(['method'=>'GET','url'=>('backUpController/create')]) !!}
             {!! Form::submit('بۆ وەرگرتنی باك ئەپ كلیك بكە',['class'=>'btns']) !!}
          {!! Form::close()!!}
        </div>
       
    </div> 


@endsection
