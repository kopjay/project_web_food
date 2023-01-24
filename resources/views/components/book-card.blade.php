@props(['book'])
<a href="{{url('detail/'.$book->food->id)}}">
    <div class="d-flex m-2 p-3 rounded-pill" style="background-color: rgb(214, 73, 73)">
        <img src="{{asset('images/food/'.$book->food->image)}}" class="rounded-circle" alt=""style="height:5em;width:5em">
        <div class="mx-3">
            <h1 class="m-1" style="color:white" >{{ $book->food->name }}</h1>
            <span class="mx-2" style="color:white"><i class="bi bi-star-fill mx-2"></i>{{ $book->food->rating }}</span>  
        </div>
        <div class="d-flex">
            <a href="/bookmark/delete/{{ $book->id }}"><span style="color:white;font-size:2.5em"><i class="bi bi-trash fs-5 text-xl"></i></span></a>
        </div>
    </div>
</a>