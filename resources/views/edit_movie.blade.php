<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="{{ URL::asset('add_movie_style.css') }}">
    <title>Edit Hotel</title>
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
                <h4>Edit Hotel</h4>
            </div>
            <div class="add-section">
                <div class="cover">
                    <img src="{{ asset('movie-image/'.$data->image) }}" alt="">
                </div>
                <div class="add-form">
                    <form  action="/Update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <label for="" id="title">Hotel Name</label>
                        <input name="title" type="text" class="text-input">


                        <label for="" id="title">Location</label>
                        <input name="genre" type="text" class="text-input">
                        

                        <label for="" id="title">Price</label>
                        <input name="duration" type="text" class="text-input">


                        

                        <h1>Facilitate</h1>
                       <div class= "split left"> 
                        <input name="trailer" type="checkbox" id="" value="Shower">
                        <label for="">Shower</label>
                        <input name="trailer" type="checkbox" id="fac2" value="Pool">
                        <label for="fa2">Pool</label>
                        <input name="trailer" type="checkbox" id="fac3" value="Breakfast">
                        <label for="fac3">Breakfast</label>
                        </div>
                        <div class= "split right"> 
                        <input name="trailer" type="checkbox" id="fac4" value="Wifi">
                        <label for="trailer">Wifi</label>
                        <input name="trailer" type="checkbox" id="fac5" value="Double Bed">
                        <label for="fa5">Double Bed</label>
                        <input name="trailer" type="checkbox" id="fac6" value="Refrigerator">
                        <label for="fac6">Refrigerator</label>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label" id="title">Picture</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
<br>
                        <label for="" id="title">Description</label>
                        
                        <textarea name="synopsis" id="" cols="10"></textarea>
                        <button type="submit">Add Hotel</button>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>