<header>
    <div class="container">
        <div class="row">

            <div class="col-2 d-flex align-items-center py-3">
                <img src="{{('/img/dc-logo.png')}}" alt="">
            </div>

            <div class="col-10 d-flex justify-content-end align-items-center" >
                <nav class="navbar navbar-light py-0 px-3 gap-4">
                    @foreach($navbar as $e)
                        <a href="{{$e['href']}}">{{$e['text']}}</a>
                    @endforeach
                </nav>
            </div>
            
        </div>
    </div>
</header>