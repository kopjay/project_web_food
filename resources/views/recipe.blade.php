<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
    @import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
*{
  box-sizing: border-box;
}

body, html {
  font-family: 'Poppins', sans-serif;
    margin: 0;
  width: 100%;
height: 100%;
    padding: 0;
}

.cards {
    width: 100%;
    display: flex;
    justify-content: center;
    -webkit-justify-content: center;
    max-width: 820px;
}


.card__like {
    width: 18px;

}

.card__clock {
    width: 15px;
  vertical-align: middle;
    fill: #AD7D52;
}
.card__time {
    font-size: 12px;
    color: #AD7D52;
    vertical-align: middle;
    margin-left: 5px;
}

.card__clock-info {
    float: right;
}

.card__img {
  visibility: hidden;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 235px;
  border-top-left-radius: 12px;
border-top-right-radius: 12px;
  
}

.card__info-hover {
    position: absolute;
    padding: 16px;
  width: 100%;
  opacity: 0;
  top: 0;
}

.card__img--hover {
  transition: 0.2s all ease-out;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
  position: absolute;
    height: 235px;
  border-top-left-radius: 12px;
border-top-right-radius: 12px;
top: 0;
  
}
.card {
  margin-right: 25px;
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}
.card:hover {
  box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
    transform: scale(1.10, 1.10);
}

.card__info {
z-index: 2;
  background-color: #fff;
  border-bottom-left-radius: 12px;
border-bottom-right-radius: 12px;
   padding: 16px 24px 24px 24px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
  color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.card__by {
    font-size: 12px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #b12a2a;
}

.card:hover .card__img--hover {
    height: 100%;
    opacity: 0.3;
}

.card:hover .card__info {
    background-color: transparent;
    position: relative;
}

.card:hover .card__info-hover {
    opacity: 1;
}
  </style>
  <body>
    {{-- <div class="container-fluid text-center">
        <div class="row">
          <div class="col-8">
            <div class="d-flex">
                <img src="{{ asset('images/ic_food.png') }}" alt="" class="logo m-5 pt-2">
                <form class="d-flex"  role="search">
                    <input class="form-control m-5 rounded-pill" style="width: 50em " type="search" placeholder="Search Recepie..." aria-label="Search">
                  </form>
            </div>
            <div>
                <img src="{{ asset('images/BookMarks2.png') }}" alt="" class="logo m-5">
                @foreach ($foods as $food )
                <div>
                  <x-food-card :food="$food" />
                </div>
                @endforeach
            </div>
          </div>
          <div class="col-4">
            <img src="{{ asset('images/Vector.png') }}" alt="">
            <img src="{{ asset('images/Bookmark.png') }}" alt="">
          </div>
        </div>
      </div> --}}

      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-md-2">
            <a href="/" style="text-decoration: none" class="ms-4">
                <p style="font-family: poppins;color:#E2243E;font-weight: bold;font-size: 30px;margin-top: 20px;">IC <span style="color: #EF7B3A"><i>FOOD</i></span></p>
              </a>
            {{-- @foreach ($cities as $city)
                <div>
                  <a href="index/?tag={{ $city->name }}">{{ $city->name }}</a>
                </div>
            @endforeach --}}
          </div>
          <div class="col-md-7">
                <form class="d-flex"  role="search">
                  @csrf
                    <input name="search" class="form-control m-5 rounded-pill" style="width: 65em " type="search" placeholder="Search Recepie..." aria-label="Search">
                </form>
                 <img src="{{ asset('images/BookMarks2.png') }}" alt="" class="logo m-5" style="width: 60em">
                 <div class="container-fluid text-center">
                  <div class="row">
                    @foreach ($foods as $food )
                      <div class="col-4">
                        <div class="m-3">
                          <x-food-card :food="$food" />
                        </div>
                      </div>
                    @endforeach
                  </div>
                 </div>
              <div class="mt-5 p-4">
                {{ $foods->links() }}
              </div>
          </div>
          <div class="col-md-3">
            <div class="mt-5">
              <img class="m-2" style="width: 2em" src="{{ asset('images/Vector.png') }}" alt="">
              <img src="{{ asset('images/Bookmark.png') }}" alt="">
              @foreach($books as $book)
              {{-- {{ dd($book->food->image) }} --}}
                <x-book-card :book="$book"/>
              @endforeach
            </div>
          </div>
          {{-- {{ dd($books)}} --}}
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
</body>
</html> 