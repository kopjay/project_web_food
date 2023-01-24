@props(['food'])
{{-- <div class="card " style="width: 18rem;">
  <div class="d-flex">
    <img src="{{ $food->image }}" class="card-img-top rounded-circle m-2" style="width: 8em ; height:8em"  alt="...">
    <div>
      <h5 class="card-title mx-5 mt-3 mb-1">{{ $food->name }}</h5>
      <h5 class="">{{ $food->city }}</h5>
    </div>
  </div>
  <div class="card-body">
    <p class="card-text">{{ $food->description }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    <form action="bookmark/{{ $food->id }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-danger mt-2">add bookmark</button>
    </form>
  </div>
</div> --}}
{{-- 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
</svg> --}}

  <article class="card card--1">
    <div class="card__info-hover"> 
      <span class="mx-2" style="color:white"><i class="bi bi-star-fill mx-2"></i>{{ $food->rating }}</span>  
        <div class="card__clock-info d-flex justify-content-center" >
          <svg class="card__clock"  viewBox="0 0 24 24">
            <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
          </svg>
          <span class="card__time"> {{ $food->duration }} min preparation</span>
        </div>
    </div>
    <div class="card__img"></div>
    <a href="{{url('detail/'.$food->id)}}" class="card_link">
       <div class="card__img--hover" style=" background-image: url('{{asset('images/food/'.$food->image)}}')"></div>
     </a>
    <div class="card__info">
      <span class="card__category"> Recipe</span>
      <h3 class="card__title">{{ $food->name }}</h3>
      <span class="card__by">dari <a href="/recipe/?tag={{ $food->city }}" class="card__author" title="author">{{ $food->city}}</a></span>
      <form action="bookmark/{{ $food->id }}" method="POST">
        @csrf
        <button type="submit" class="m-2" style="color:red">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          </svg>
        </button>     
      </form>
    </div>
  </article>

