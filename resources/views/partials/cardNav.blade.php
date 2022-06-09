<section>
    <div class="container py-5">
        <div class="row justify-content-around" >
            @foreach ($cardNav as $cardNav)
            <div class="col-2 d-flex">
                <div class="d-flex justify-content-center align-items-center" >
                    <img src="{{$cardNav['img']}}" :alt="text">
                    <div class="">
                        <p class="m-0">{{$cardNav['text']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>