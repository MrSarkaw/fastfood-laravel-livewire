@extends('layouts.app')

@section('content')
<div class="col-12">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-7 col-lg-5">
            <div class="card">
                <div class="col-12  text-center p-5">
                    <img src="./wallpaper/logo.png"
                    style="border-radius:50%;padding:12px;
                            box-shadow: 5px 5px 20px #151515,
                        -4px -4px 10px rgba(255, 255, 255, 0.1);
                         ">
                </div>
                <div class="card-body p-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                            <div class="col-12 mx-auto mt-2">
                              <div class="ui col-9 mx-auto text-center">
                                <i class="fas fa-envelope"></i> <input id="email" type="email" placeholder="email" class="text-light p-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              </div>  

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       


                            <div class="col-12 mx-auto mt-3">
                                <div class="ui col-9 mx-auto text-center">
                                    <i class="fas fa-lock-alt"></i> <input id="password" type="password" placeholder="password" class="p-2  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>       
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      

                        <div class="form-group row mt-5">
                            <div class="col-12 ">
                                <button type="submit" class="btn-block col-10 mx-auto" >
                                    {{ __('Login') }}   
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
