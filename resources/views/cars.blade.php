<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our CarList</h6>
                    <h2>Our selection of cars </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-scroller">

    <form action="{{url('/search')}}" method="get" >

        @csrf
        <input type="text" name="search" style="color: #721c24">
        <input type="submit" value="Search" class="btn btn-success">
    </form>


    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)

                <div class="item">
                    <div style="background-image: url('/carimage/{{$data->image}}' );"  class="card">
                        <div class="price"><h6>{{$data->price}}</h6></div>
                        <div class='info'>
                            <h1 class='title'>{{$data->title}}</h1>
                            <p class='description'>{{$data->description}}</p>
                            <div class="main-text-button">
                                <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
