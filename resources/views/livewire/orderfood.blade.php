<div class="col-12">
    <div class="col-12 text-center" >
        <div x-data="{ open1: true , open2:false }" @click.away="open1 = true,open2=false">
           <div class="col-12 row mx-auto">
            <div class="p-2 col-12 mx-auto col-md-6">
                <div class="divBtns col-12 ">
                <button @click="open1 = true , open2=false" class="btns">خواردنەكان</button>    
                </div>
            </div>

            <div class="p-2 col-12 mx-auto col-md-6">
                <div class="divBtns col-12">
                    <button @click="open2 = true,open1=false" class="btns">لیستی خواردنی داواكراوە</button>
                </div>
            </div>
            </div> 
            <ul x-show="open1" class="p-3 mt-4 row" 
            style=" box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
            -2px -2px 5px rgba(255, 255, 255, 0.2) ;border-radius:20px;  " >
             
             
             @foreach ($foods as $food)
             <div class="p-2 col-12 col-sm-5 col-md-3 col-lg-2 mx-auto">
                 <div class="users p-3">
                    <div>
                     <img src="./wallpaper/arrayfood/{{array_rand($arrImg)}}.png" 
                     alt="" style="width:70px;height:70px;">
                    </div>
                    <div class=" p-2 ">
                        <h5 class="card-title">{{$food->name}}</h5>
                        <p class="card-text">{{$food->price}} : نرخ</p>
                    </div>
                          <input type="number" class="inp text-center"
                            wire:model.debounce.20000s="number"
                            wire:keydown.enter="insert({{$food->id}})" 
                            placeholder="ژمارەی ویستراو بنووسە">
                </div>
             </div>
         @endforeach
            
            </ul>
            <ul x-show="open2"  class="p-3 mt-4 row" 
            style=" box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
            -2px -2px 5px rgba(255, 255, 255, 0.2) ;border-radius:20px;  " >
                <div class="col-12 h4" style="color:#83d0c9;">خواردنی داواكراو</div>
              
                <div class="col-12 mt-2 mb-3">
                    @if(count($orderfood)>0)

                    <button class="btn col-12 col-md-5 col-lg-3 btns float-left">پاككردنەوە</button>
                    <button class="btn col-12 col-md-5 col-lg-3 btns float-right">پرێنت كردن</button>

                    @endif
                </div>


                    @if(count($orderfood)>0)
                        @foreach ($orderfood as $food)
                            <div class="p-2 col-12 col-sm-5 col-md-3 col-lg-3 mx-auto">
                                <div class="users p-3">
                                    <div>
                                    <img src="./wallpaper/arrayfood/{{array_rand($arrImg)}}.png" 
                                    alt="" style="width:70px;height:70px;">
                                    </div>
                                    <div class=" p-2 mb-3 ">
                                        <h5 class="card-title">{{$food->name}}</h5>
                                            <div class="col-6 float-left">
                                                <p class="text-left">{{$food->price}} : نرخ</p>
                                            </div>
                                            <div class="col-6 float-right">
                                                <p class="text-right">{{$food->count}} : دانە</p>
                                            </div>
                                            <div class="col-12">
                                            <p class="col-12">  {{$food->price * $food->count}} : كۆی گشتی</p>
                                            </div>
                                            <input type="text" class="inp col-12" placeholder="لابردنی دانە"
                                                wire:keydown.enter="delete({{$food->id}})"
                                                wire:model.debounce.20000s="numberDec">
                                    </div>
                                        
                                </div>
                        </div>
                    
                        @endforeach
                        @else
                    <div class="col-12 text-light">هیچ خواردنێك داوا نەكراوە</div>
                @endif

            </ul>

        </div>

    </div>


    
  
</div>


