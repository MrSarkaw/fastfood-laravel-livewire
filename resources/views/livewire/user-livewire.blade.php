<div class="col-12">
    <div class="col-12 text-center" >
        <div x-data="{ open1: false , open2:true }" @click.away="open1 = false,open2=true">
           <div class="col-12 row mx-auto">
            <div class="p-2 col-12 mx-auto col-md-6">
                <div class="divBtns col-12 ">
                <button @click="open1 = true , open2=false" class="btns">زیادكردنی بەكارهێنەر</button>    
                </div>
            </div>

            <div class="p-2 col-12 mx-auto col-md-6">
                <div class="divBtns col-12">
                    <button @click="open2 = true,open1=false" class="btns">بینینی بەكارهێنەران</button>
                </div>
            </div>
            </div> 
            <ul x-show="open1" class="p-3 mt-4" 
            style=" box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
            -2px -2px 5px rgba(255, 255, 255, 0.2) ;border-radius:20px; " >
             
             <div class="inputDevs col-12 col-sm-9 col-md-4  mx-auto mt-2">
                 <input type="text" class="mt-2 inp" 
                    placeholder="ناو"      wire:model="name">
             </div>   

             <div class="inputDevs col-12 col-sm-9 col-md-4  mx-auto mt-2">
                    <input type="email" class=" mt-2 inp text-center" 
                    placeholder="ئیمەیڵ"   wire:model="email">
             </div>

             <div class="inputDevs col-12 col-sm-9 col-md-4  mx-auto mt-2">
                    <input type="password" class=" mt-2 inp text-center" 
                    placeholder="تێپەروشە" wire:model="password">
             </div>

             <div class="inputDevs col-12 col-sm-9 col-md-4 mx-auto mt-2">

                    <select name="role" class=" mt-2 text-center"   
                    wire:model="role_id">
                        <option value="" disabled>ئاست دیاری بكە</option>
                        <option value="1">ئەدمین</option>
                        <option value="2">بەكارهێنەر</option>
                    </select>
             </div>  
                    <button class="btns col-7 mt-3" wire:click="insert()"
                    style=" ">زیادكردن</button>

            </ul>
            <ul x-show="open2" class="p-0 mt-4 row">

                @foreach ($users as $user)
                <div class="p-2 col-12 col-sm-5 col-md-4 col-sm-3 mx-auto">
                    <div class="users p-3">
                     <div class="col-12">
                        <div class="iconsBar float-right" 
                             onclick="confirm('دڵنیای لە سڕینەوەی؟')|| event.stopImmediatePropagation()"
                             wire:click="delete({{$user->id}})" 
                             style="cursor:pointer">
                            <img src="./wallpaper/wrong.png"  alt=""
                            >
                        </div> 
                        <div class="float-left">
                             <a href="{{route('user.edit',$user->id)}}">
                                <img src="./wallpaper/refresh.png" 
                                class="iconsBar"  alt="">
                            </a>
                        </div> 
                    </div>
                        <div class=" p-2 ">
                            <h5 class="card-title">{{$user->name}}</h5>
                            <p class="card-text">{{$user->email}}</p>
                            <p class="card-text">{{$user->role->name}}</p>
                        </div> 
                    </div>
                    
                </div>


            @endforeach

            </ul>


        </div>

    </div>


    
  
</div>


