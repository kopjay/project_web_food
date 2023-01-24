<x-template>
    <div style="height:1000px;background-size: cover;background-image:url({{asset('images/background.png')}})">
        <div style="float: right;margin-top:auto;margin-bottom:auto;margin-right:180px;margin-top:300px">
            <p style="color:white;font-family:poppins;font-weight:bold;font-size:50px">Explore Our</p>
            <p style="color:white;font-family:poppins;font-weight:bold;font-size:50px">Indonesian Recipe</p>
            <p style="color:white;font-family:poppins;font-weight:550;font-size:18px;">Let's Start Cooking With Our Most Iconic Indonesian Food</p>
            <div>
                <a href="#recipe">
                    <button style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:10px;color:white;border:none;width:150px;height:50px;font-weight:bold;font-size:18px">Our Best Food</button>
                </a>
                <a href="{{url('recipe')}}">
                    <button style="background:#E3243E;border-radius:10px;color:white;border:none;width:150px;height:50px;font-weight:bold;font-size:18px;margin-left:30px">Our Recipes</button>
                </a>
            </div>
        </div>
    </div>
    <div class="mx-4" style="padding: 50px" id="about">
        <p style="font-family: poppins;font-weight:bold;font-size:40px;text-align:center;border-bottom:3px solid #EF7B3A;padding-bottom:15px;text-align:left">About <span style="color:#E2243E">Us</span></p> 
        <div class="d-flex" style="margin-top: 30px;">
            <p style="font-family: poppins;font-size:20px;text-align:justify;width:700px">Food has a distinctive taste and comes from various countries, both locally and globally. However, local/archipelagic food is still rarely known in the community, one of which is the typical Betawi babanci vegetable. <br> <br> Therefore, we have an idea to build a website application called IC Food as a means of preserving and popularizing Indonesian specialties. </p>
            <p style="font-family: poppins;color:#E2243E;font-weight: bolder;font-size: 90px;margin-top: 30px;margin-left:150px">IC <span style="color: #EF7B3A"><i>FOOD</i></span></p>
        </div>
        <p style="font-family:poppins;font-size:40px;text-align:center;color:#EF7B3A;font-weight:bold;margin-top:20px">Powered <span style="color:#303030">by</span></p>
        <div style="margin-top:30px">
            <img src="{{asset('images/logo/masterchef.png')}}" style="width:250px;height:150px;margin-left:50px">
            <img src="{{asset('images/logo/yellowfit.png')}}" style="width:250px;height:150px;margin-left:100px">
            <img src="{{asset('images/logo/royco.png')}}" style="width:170px;height:150px;margin-left:100px">
            <img src="{{asset('images/logo/mangkokku.png')}}" style="width:200px;height:150px;margin-left:100px">
        </div>
    </div>
    <div style="background-color: #C84250;height:1350px">
        <div class="d-flex" style="padding:70px">
            <p style="color:white;font-family:poppins;font-weight:600;font-size:40px">Choose Your Favorite!</p>
            <button style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:10px;color:white;border:none;width:150px;height:50px;font-weight:bold;font-size:18px;margin-left:auto;order:2">See All</button>
        </div>
        <center>
            @foreach($food->shuffle()->take(1) as $each_food)
                <div class="bg-white" style="width:1000px;height:330px;border-radius:10px;">
                    <div class="d-flex">
                        <img src="{{asset('images/food/'.$each_food->image)}}" style="width:400px;height:350px;margin-top:-10px;margin-left:-130px;border-radius:50%">
                        <div style="width:700px;padding:25px">
                            <p style="color:black;font-family:poppins;font-weight:600;font-size:28px;text-align:left">{{$each_food->name}}</p>
                            <p style="font-family: poppins;font-size:20px;text-align:justify">{{$each_food->description}}</p>
                            <div class="d-flex mt-5">
                                <div class="d-flex">
                                    <i class="fa-solid fa-heart fa-xl" style="color:#E2243E"></i>
                                    <p class="ms-2" style="color:black;font-family:poppins;font-weight:bold;line-height:5px;font-size:20px">2</p>
                                </div>
                                <div class="d-flex ms-4">
                                    <i class="fa-solid fa-clock fa-xl" style="color:#F08039"></i>
                                    <p class="ms-2" style="color:black;font-family:poppins;font-weight:bold;line-height:5px;font-size:20px">{{$each_food->durationCook}} m</p>
                                </div>
                                <div class="d-flex ms-4">
                                    <i class="fa-solid fa-kitchen-set fa-xl" style="color:#F07B39"></i>
                                    <p class="ms-2" style="color:black;font-family:poppins;font-weight:bold;line-height:5px;font-size:20px">{{$each_food->difficultyCook}}</p>
                                </div>
                                <i class="fa-solid fa-circle-chevron-right fa-4x" style="margin-left:auto;order:2;line-height:10px"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container" style="margin-top:150px;margin-left:170px">
                <div class="row">
                    @php($count = 1)
                    @foreach($food->shuffle()->take(4) as $each_food)
                        <div class="col">
                            <div class="bg-white" style="width:500px;height:200px;border-radius:10px;">
                                <div class="d-flex">
                                    <img src="{{asset('images/food/'.$each_food->image)}}" style="width:250px;height:220px;margin-left:-110px;border-radius:50%">
                                    <div class="d-flex" style="width:700px;padding:40px;margin-left:-40px">
                                        <div class="ms-5">
                                            <p style="color:black;font-family:poppins;font-weight:600;font-size:25px;text-align:left;margin-bottom:0px">{{$each_food->name}}</p>
                                            <div class="d-flex" style="margin-top: 40px;">
                                                <div class="d-flex">
                                                    <i class="fa-solid fa-heart fa-xl" style="color:#E2243E"></i>
                                                    <p class="ms-2" style="color:black;font-family:poppins;font-weight:bold;line-height:5px;font-size:20px">2</p>
                                                </div>
                                                <div class="d-flex ms-4">
                                                    <i class="fa-solid fa-clock fa-xl" style="color:#F08039"></i>
                                                    <p class="ms-2" style="color:black;font-family:poppins;font-weight:bold;line-height:5px;font-size:20px">{{$each_food->durationCook}} m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <i class="fa-solid fa-chevron-right fa-4x" style="margin-left:auto;order:2;margin-top:25px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($count == 2)
                            <div class="w-100" style="margin-top: 100px;"></div>
                        @endif
                        @php($count = $count + 1)
                    @endforeach
                </div>
            </div>
        </center>
    </div>
    <div class="mx-4" style="padding: 50px">
        <p style="font-family: poppins;font-weight:bold;font-size:40px;text-align:center;border-bottom:3px solid #C84250;padding-bottom:15px"> <span style="color:#B84A07">Cooking</span> in 3 Easy Steps</p> 
        <div class="container px-4 text-center">
            <div class="row pt-4">
                    <div class="col">
                        <center>
                            <div style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:50%;width:120px;height:120px">
                                <i class="fa-solid fa-pizza-slice" style="color:white;font-size:60px;line-height:2"></i>
                            </div>
                            <div>
                                <p style="font-family: poppins;font-weight:bold;font-size:25px;text-align:center;padding-top:20px">Choose Your Favorite</p>
                                <p style="font-family: poppins;font-size:20;text-align:center;padding-top:10px">"Choose your favorite menu from all corners of Indonesia, and feel a new taste sensation from authentic Indonesian flavors"</p>
                            </div>
                        </center>
                    </div>

                    <div class="col">
                        <center>
                            <div style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:50%;width:120px;height:120px">
                                <i class="fa-solid fa-book" style="color:white;font-size:60px;line-height:2"></i>
                            </div>
                            <div>
                                <p style="font-family: poppins;font-weight:bold;font-size:25px;text-align:center;padding-top:20px">Follow the Recipe</p>
                                <p style="font-family: poppins;font-size:20;text-align:center;padding-top:10px">"Follow the recipe instructions, so that the resulting food has an original and authentic taste like the original"</p>
                            </div>
                        </center>
                    </div>

                    <div class="col">
                        <center>
                            <div style="background:linear-gradient(to right,#E42C3E,#EF7B3A);border-radius:50%;width:120px;height:120px">
                                <i class="fa-solid fa-kitchen-set" style="color:white;font-size:60px;line-height:2"></i>
                            </div>
                            <div>
                                <p style="font-family: poppins;font-weight:bold;font-size:25px;text-align:center;padding-top:20px">Cook Your Food</p>
                                <p style="font-family: poppins;font-size:20;text-align:center;padding-top:10px">"Start to cook your food by following the recipe instructions, and enjoy the authentic taste of authentic Indonesian food"</p>
                            </div>
                        </center>
                    </div>
            </div>
        </div>
    </div>
    
    <center>
        <div style="background-color: #E2243E;height:1350px" id="recipe">
            <p style="font-family: poppins;font-weight:bold;font-size:40px;text-align:center;color:white;padding-top:30px">Top Recipes of The Week</p>
            <div class="container">
                <div class="row p-5" style="border:5px solid white;width:1000px">
                @php($count = 1)
                    @foreach($food->take(10) as $each_food)
                        @if($count == 1)
                            <div class="col" style="margin-left:-60px">
                                <div class="d-flex p-2" style="border-radius:10px;width:880px;margin-left:60px;background-size:cover;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url('{{asset('images/food/'.$each_food->image)}}');opacity:1;background-position:center;">
                                    <div style="border-radius:50%;background:#FFD700;height:60px;width:60px;margin-left:10px;vertical-align:middle">
                                            <p style="font-family: poppins;color:white;vertical-align:middle;font-size:40px;font-weight:bold">{{$count}}</p> 
                                        </div>
                                    <p style="font-family: poppins;color:white;font-size:30px;font-weight:bold;margin-top:5px;margin-left:50px">{{$each_food->name}}</p>
                                    <button type="button" class="btn btn-light" style="font-family: poppins;font-weight:bold;border-radius:30px;width:150px;height:40px;margin-top:10px;margin-left:auto;order:2">View More</button>
                                </div>
                            </div>
                        @elseif($count == 2)
                            <div class="col mt-4" style="margin-left:-60px">
                                <div class="d-flex p-2" style="border-radius:10px;width:880px;margin-left:60px;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url('{{asset('images/food/'.$each_food->image)}}');opacity:1;background-position:center;">
                                    <div style="border-radius:50%;background:#C0C0C0;height:60px;width:60px;margin-left:10px;vertical-align:middle">
                                            <p style="font-family: poppins;color:white;vertical-align:middle;font-size:40px;font-weight:bold">{{$count}}</p> 
                                        </div>
                                    <p style="font-family: poppins;color:white;font-size:30px;font-weight:bold;margin-top:5px;margin-left:50px">{{$each_food->name}}</p>
                                    <button type="button" class="btn btn-light" style="font-family: poppins;font-weight:bold;border-radius:30px;width:150px;height:40px;margin-top:10px;margin-left:auto;order:2">View More</button>
                                </div>
                            </div>
                        @elseif($count == 3)
                            <div class="col mt-4" style="margin-left:-60px">
                            <div class="d-flex p-2" style="border-radius:10px;width:880px;margin-left:60px;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url('{{asset('images/food/'.$each_food->image)}}');opacity:1;background-position:center;">
                                    <div style="border-radius:50%;background:#FF8812;height:60px;width:60px;margin-left:10px;vertical-align:middle">
                                            <p style="font-family: poppins;color:white;vertical-align:middle;font-size:40px;font-weight:bold">{{$count}}</p> 
                                        </div>
                                    <p style="font-family: poppins;color:white;font-size:30px;font-weight:bold;margin-top:5px;margin-left:50px">{{$each_food->name}}</p>
                                    <button type="button" class="btn btn-light" style="font-family: poppins;font-weight:bold;border-radius:30px;width:150px;height:40px;margin-top:10px;margin-left:auto;order:2">View More</button>
                                </div>
                            </div>
                        @else
                            <div class="col mt-4" style="margin-left:-60px">
                                <div class="d-flex p-2" style="border-radius:10px;width:880px;margin-left:60px;background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url('{{asset('images/food/'.$each_food->image)}}');opacity:1;background-position:center;">
                                    <div style="border-radius:50%;height:60px;width:60px;margin-left:10px;vertical-align:middle">
                                            <p style="font-family: poppins;color:white;vertical-align:middle;font-size:40px;font-weight:bold">{{$count}}</p> 
                                        </div>
                                    <p style="font-family: poppins;color:white;font-size:30px;font-weight:bold;margin-top:5px;margin-left:50px">{{$each_food->name}}</p>
                                    <button type="button" class="btn btn-light" style="font-family: poppins;font-weight:bold;border-radius:30px;width:150px;height:40px;margin-top:10px;margin-left:auto;order:2">View More</button>
                                </div>
                            </div>
                        @endif
                        @php($count = $count + 1)
                    @endforeach
                </div>    
            </div>
        </div>
    </center>
    
    <center>
        <div class="p-5 mb-4 mt-3" id="contact">
            <div class="container p-4" style="width:1000px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:10px">
                <p style="font-family: poppins;font-weight:bold;font-size:30px;text-align:center"> CONTACT <span style="color:#E3243E">US</span></p> 
                <form action="/" method="post">
                    @csrf
                    <div class="mb-3 ps-3" style="text-align: left;width:1000px;padding-right:70px">
                        <label class="form-label" style="font-family: poppins;">Name</label>
                        <input name="name" id="name" class="form-control" placeholder="Your name" style="font-family: poppins;" required>
                    </div>
                    <div class="mb-3 ps-3" style="text-align: left;width:1000px;padding-right:70px">
                        <label class="form-label" style="font-family: poppins;">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your email" style="font-family: poppins;" required>
                    </div>
                    <div class="mb-3 ps-3" style="text-align: left;width:1000px;padding-right:70px">
                        <label class="form-label" style="font-family: poppins;">Subject</label>
                        <input name="subject" id="subject" class="form-control" placeholder="Your subject" style="font-family: poppins;" required>
                    </div>
                    <div class="mb-4 ps-3" style="text-align: left;width:1000px;padding-right:70px">
                        <label class="form-label" style="font-family: poppins;">Message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Your message" style="font-family: poppins;" required></textarea>

                    </div>
                    <div class="mb-3 ps-3" style="text-align: left;">
                        <button type="submit" class="btn btn-danger" rows="5" cols="50" style="width:120px;font-family:poppins;">Submit</button>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert"> {{ session()->get('message') }}</div>
                    @endif
                </form>
            </div>
        </div>
    </center>

    <footer style="background-color: #C84250;height:300px">
        <div class="d-flex" style="padding:100px">
            <p style="font-family:poppins;color:white;margin-top:8px;font-size:18px">&copy; 2022 ICFOOD, All rights reserved.</p>
            <div style="margin-left:auto">
                <i class="fa-brands fa-instagram" style="color:white;font-size:35px"></i>
                <i class="fa-brands fa-twitter" style="color:white;font-size:35px;margin-left:30px"></i>
                <i class="fa-brands fa-youtube" style="color:white;font-size:35px;margin-left:30px"></i>
                <i class="fa-brands fa-square-facebook" style="color:white;font-size:35px;margin-left:30px"></i>
                <i class="fa-brands fa-linkedin" style="color:white;font-size:35px;margin-left:30px"></i>
            </div>
        </div>

    </footer>

</x-template>