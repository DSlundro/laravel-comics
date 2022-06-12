<header>
    <div class="container">
        <div class="row">

            <div class="col-2 d-flex align-items-center py-3">
                <img src="{{('/img/dc-logo.png')}}" alt="">
            </div>
            <div class="col-10 d-flex justify-content-end align-items-center" >

                <nav class="navbar navbar-light py-0 px-3 gap-4">
                    <a class ="{{Route::currentRouteName()==='home'?'active':''}}" href="{{ route('home')}}">Home</a>
                    <a class ="{{Route::currentRouteName()==='characters'?'active':''}}" href="{{ route('characters')}}">Characters</a>
                    <a class ="{{Route::currentRouteName()==='comics'?'active':''}}" href="{{ route('comics')}}">Comics</a>
                    <a class ="{{Route::currentRouteName()==='movies'?'active':''}}"href="{{ route('movies')}}">Movies</a>
                    <a class ="{{Route::currentRouteName()==='tv'?'active':''}}"href="{{ route('tv')}}">Tv</a>
                    <a class ="{{Route::currentRouteName()==='games'?'active':''}}" href="{{ route('games')}}">Games</a>
                    <a class ="{{Route::currentRouteName()==='collectibles'?'active':''}}" href="{{ route('collectibles')}}">Collectibles</a>
                    <a class ="{{Route::currentRouteName()==='videos'?'active':''}}" href="{{ route('videos')}}">Videos</a>
                    <a class ="{{Route::currentRouteName()==='fans'?'active':''}}" href="{{ route('fans')}}">Fans</a>
                    <a class ="{{Route::currentRouteName()==='news'?'active':''}}" href="{{ route('news')}}">News</a>
                    <a class ="{{Route::currentRouteName()==='shop'?'active':''}}" href="{{ route('shop')}}">Shop</a>
                </nav>
                <input type="text" placeholder="search">
                
            </div>
        </div>
    </div>
</header>