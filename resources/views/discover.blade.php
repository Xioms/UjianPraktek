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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Discover</title>
</head>
<body>
    <div class="page-layout">
        <div class="sidebar-left">
            <div class="header-1">
                <img src="{{ url('/assets/eye.png') }}" alt="filme" id="header-logo">
                <h4>filme</h4>
            </div>
            <h4 class="title-sidebar">Menu</h4>
            <div class="menu">
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/home.png') }}" alt=""></a>
                    <a href=""><h4>Home</h4></a>    
                </div>
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/discover.png') }}" alt=""></a>
                    <a href=""><h4>Discover</h4></a>
                </div>
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/top-rated.png') }}" alt=""></a>
                    <a href=""><h4>Top Rated</h4></a>
                </div>
            </div>
            <h4 class="title-sidebar">Library</h4>
            <div class="library">
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/download.png') }}" alt=""></a>
                    <a href=""><h4>Downloaded</h4></a>
                </div>
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/add.png') }}" alt=""></a>
                    <a href=""><h4>Add Movie</h4></a>
                </div>
            </div>
        </div>
        <div class="main-section">
            <div class="header-2">
                <div class="menus">
                    <a href=""><h4>Movie</h4></a>
                    <a href=""><h4>TV Show</h4></a>
                    <a href=""><h4>Anime</h4></a>
                </div>
                <a href="/profile"><img src="{{ url('/assets/person.png') }}" alt=""></a>
            </div>

        </div>
    </div>
</body>
</html>