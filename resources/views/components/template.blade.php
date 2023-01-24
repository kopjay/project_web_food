<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/41a6b3060e.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white shadow-sm p-3">
      <div class="container-fluid">
          <a href="/" style="text-decoration: none" class="ms-4">
            <p style="font-family: poppins;color:#E2243E;font-weight: bold;font-size: 30px;margin-top: 20px;">IC <span style="color: #EF7B3A"><i>FOOD</i></span></p>
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li>
              <a href="/" style="text-decoration: none">
                <p class="text-dark" style="font-family: poppins;font-size: 20px;margin-top: 28px;margin-left:100px">Home</p>
              </a>
            </li>
            <li>
              <a href="#about" style="text-decoration: none">
                <p class="text-dark ms-5" style="font-family: poppins;font-size: 20px;margin-top: 28px">About</p>
              </a>
            </li>
            <li>
              <a href="#recipe" style="text-decoration: none">
                <p class="text-dark ms-5" style="font-family: poppins;font-size: 20px;margin-top: 28px">Recipes</p>
              </a>
            </li>
            <li>
              <a href="#contact" style="text-decoration: none">
                <p class="text-dark ms-5" style="font-family: poppins;font-size: 20px;margin-top: 28px">Contact</p>
              </a>
            </li>
          </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-right:100px">
      <ul class="navbar-nav">
        @if(Auth::check())
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
          <button style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:10px;color:white;border:none;width:150px;height:50px;font-weight:bold;font-size:20px">Logout</button>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @else
        <a href="login">
          <button style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:10px;color:white;border:none;width:150px;height:50px;font-weight:bold;font-size:20px">Login</button>
        </a>
        @endif
      </ul>
    </div>
    </nav>
    {{$slot}}
  </body>
</html>