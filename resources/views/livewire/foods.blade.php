    <div>
                <div x-data="{open : false}" @click.away="open=false" class="col-12 mx-auto">
                    <div class="divBtns col-12 col-md-3">
                        <button class="btns" @click="open=true">زیادكرندی خواردن</button>
                    </div>
                    
                    <div x-show="open" class="mt-4 col-12 col-md-5 mx-auto">
                        <div class="inputDevs">
                            <input type="text" value="" class="inp" placeholder="ناوی خواردن" wire:model="name">
                        </div>

                        <div class="inputDevs mt-2">
                            <input type="number" value="" class="inp" placeholder="نرخ" wire:model="price">
                        </div>

                        <button class="btns mt-3" wire:click="insert()">زیادكردن</button>

                    </div>
                </div>

                <div class="container row mt-5">
                    @foreach ($food as $foods)
                        <div class="col-12 col-sm-6 col-md-5 mx-auto col-lg-3 p-3" >
                            <div class="cardfood ">
                                <div>
                                    <img src="./wallpaper/burger.png" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$foods->name}}</h5>
                                    <p class="card-text">{{$foods->price}}</p>
                                </div>
                                <div class="row p-3">
                                <a class="button" href="{{route('foodsAndDrinks.edit',$foods->id)}}">دەست كاری</a>
                                    <button class="button" 
                                            style="background:#c0392b"
                                            wire:click="delete({{$foods->id}})"
                                            onclick="confirm('دڵنیای لە سڕینەوەی؟')|| event.stopImmediatePropagation()"
                                            >سڕینەوە</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </div>
