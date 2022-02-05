@extends('layouts.admin')

@section('content')
    <div class="row col-10 col-md-6 mx-auto">    
       
        <ul class="p-3 mt-4 col-12" 
        style=" box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
        -2px -2px 5px rgba(255, 255, 255, 0.2) ;border-radius:20px; " >
         {!! Form::model($user,['method'=>'PATCH','url'=>('user/'.$user->id)]) !!}
                <div class="inputDevs col-12 col-sm-9   mx-auto mt-2">
                    {!! Form::Text('name',null,['class'=>'inp mt-2','placeholder'=>'ناو']) !!}
                </div>   

                <div class="inputDevs col-12 col-sm-9  mx-auto mt-2">
                    {!! Form::Email('email',null,['class'=>'inp mt-2','placeholder'=>'ئیمەیل']) !!}

                </div>

                <div class="inputDevs col-12 col-sm-9   mx-auto mt-2">
                    {!! Form::password('password',['class'=>'inp mt-2','placeholder'=>'تێپەڕوشە']) !!}
                </div>

                <div class="inputDevs col-12 col-sm-9  mx-auto mt-2">

                        <select name="role" class=" mt-2 text-center">
                            <option value="" disabled>ئاست دیاری بكە</option>
                            <option value="1">ئەدمین</option>
                            <option value="2">بەكارهێنەر</option>
                        </select>
                </div>  
                        <button class="btns col-7 mt-3" wire:click="update()"
                        style=" ">تازەكردنەوە</button>
         {!! Form::close() !!}
        </ul>
    </div> 


@endsection
