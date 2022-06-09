<div class="w-100 d-flex justify-content-center">
    <img src="/img/jumbotron.jpg" alt="">
</div>
<div class="bg-dark">
    <div class="container text-start">
        <div class="row">

            <div class="col-12">
                <div class="col-3 d-flex align-items-center flex-wrap">
                    <button type="button" class="btn-cards text-white">CURRENT SERIES</button>
                </div>
            </div>
            
            <div class="col-12 d-flex py-5 px-4 gap-5 flex-wrap justify-content-center">
            @foreach ($comics as $comic)
                <div class="card d-flex flex-wrap
                col-10 col-md-5 col-lg-3 col-xxl-2">
                    <img src="{{$comic['thumb']}}" alt="">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$comic['series']}}</h5>
                        <a href="#" class="btn btn-primary">Buy {{$comic['price']}}</a>
                    </div>
                </div>
            @endforeach
                <div class="col-12 text-center">
                    <a href="#" class="btn-load text-white">LOAD MORE</a>
                </div>
            </div>

        </div>
    </div>
</div>
