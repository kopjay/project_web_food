<x-template>

<div class="container p-5 col-md-8">
    <div class="shadow-lg p-3 mb-5 bg-body rounded-5">
        <div class="p-3">
            <div class="row">
                <div class="position-relative">
                    <a href="{{url('recipe')}}" class="btn-close position-absolute top-0 end-0 bg-danger p-3 rounded-circle" type="button" aria-label="Close"></a>
                </div>

                <br/><br/>

                <div class="col-md-3">
                    <img src="{{asset('images/food/'.$food->image)}}" class="rounded-circle h-100 w-100">
                </div>
                <div class="col-md-4">
                    <h1 class="card-title">{{$food->name}}</h1>
                    <h4 class="text-muted">{{$food->city}}</h4>
                </div>
                <div class="col-md-4">
                    <p style="text-align: justify;">{{$food->description}}</p>
                </div>
            </div>

            <br/><br/>

            <div class="row">
                <h2 class="card-title">Ingredients</h2>
                <div class="row g-4">
                    @foreach($food_mapping_ingredients as $each_food_mapping_ingredients)
                        @if($each_food_mapping_ingredients->foodId == $food->id)
                            @foreach($ingredients as $each_ingredient)
                                @if($each_food_mapping_ingredients -> ingredientsId == $each_ingredient->id)
                                <div class="col-4 col-md-3">
                                    <center>    
                                        <img src="{{asset('images/ingredient/'.$each_ingredient->image)}}" class="rounded-4 w-75 h-75    " alt="daun melinjo">
                                        <h6 style="text-align: center;">{{$each_ingredient->name}}</h6>
                                    </center>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                </div>
            </div>

            <br/><br/>

            <div class="row">
                <h2 class="card-title">How To Cook</h2>
                <br/><br/>
                @php($counter = 0)
                @foreach($food_mapping_recipe as $each_food_mapping_recipe)
                    @if($each_food_mapping_recipe->foodId == $food->id)
                        @foreach($recipe as $each_recipe)
                            @if($each_food_mapping_recipe -> recipeId == $each_recipe->id)
                            @php($counter = $counter + 1)
                                <p class="h5">{{$counter.'. '.$each_recipe->description}}</p>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</div>

</x-template>


