{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");
    body {
    background-color: #eee;
    }
    .height {
    height: 100vh
    }
    .search {
    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1)
    }
    .search input {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4
    }
    .search input:focus {
    box-shadow: none;
    border: 2px solid blue
    }
    .search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px
    }
    .search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: blue;
    }
    .wrapper {
	text-align: center;
    }
}
  </style>
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Gi-Ret PSY 2.0</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse show" id="navbarDark">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item"> <a class="nav-link" href="add">Add Patient</a> </li>
          <li class="nav-item"> <a class="nav-link" href="list">View Patients</a> </li>
          <li class="nav-item"> <a class="nav-link" href="search">Search Patients</a> </li>
          <li class="nav-item"> <a class="nav-link" href="generate">Reten Generation</a> </li>
        </ul>
        <div>
          <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</button>
        </div>
      </div>
    </div>
  </nav>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
  <br>  --}}
  <style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a {float: left;}
      div.content {margin-left: 0;}
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
    </style>
    </head>
    <body>

    <div class="sidebar">
      <a class="active" href="#home">Home</a>
      <a href="tadika/main">Tadika</a>
      <a href="sekolah/main">Sekolah</a>
      <a href="youngadult/main">Young Adult</a>
    </div>

    <div class="content">
      <h2>Responsive Sidebar Example</h2>
      <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
      <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
      <h3>Resize the browser window to see the effect.</h3>
    </div>
  @yield('content')
