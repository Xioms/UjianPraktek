<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ URL::asset('detail_movie_style.css') }}">
    <x-embed-styles />
    <title>Detail Hotel</title>
</head>
<body>
    <div class="page-layout">
        <div class="sidebar-left">
            <div class="header-1">
                
                <h4>Hotelio</h4>
            </div>
            <h4 class="title-sidebar">Menu</h4>
            <div class="menu">
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/home.png') }}" alt=""></a>
                    <a href="/home"><h4>Home</h4></a>    
                </div>
            </div>
            <h4 class="title-sidebar">Library</h4>
            <div class="library">
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/add.png') }}" alt=""></a>
                    <a href="/add"><h4>Add Hotel</h4></a>
                </div>
            </div>
        </div>
        <div class="main-section">
            <div class="header-2">
                <div class="menus">
                    <a href="/home"><img src="{{ url('/assets/arrow-left.png') }}" alt=""></a>
                    <h4>{{ $films->title }}</h4>
                </div>
                <a href="/profile"><img src="{{ url('/assets/person.png') }}" alt=""></a>
            </div>
            <div class="movie-container">
            <img src="{{ asset('movie-image/'.$films->image) }}" alt="" id="mov-cover">
</div>
            <div class="title-row">
                <h3>{{ $films->title }}</h3>
                <div class="download">
                      <a href="/delete/{{$films->id}}"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg></a>

                     <a href="/tampilanData/{{$films->id}}"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>
                </div>
            </div>
            <h5>{{ $films->duration }}</h5>
            <h5>{{ $films->genre }}</h5>
            <h5>{{ $films->trailer }}</h5>
           
            <p>{{ $films->synopsis }}</p>
        </div>
    </div>
</body>
</html>