
@extends('user.headerfooter')
@section('content')
  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Makeup Catagories
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Engagemet/Nikkah Makeup</li>
        <li data-filter=".pizza">Mayoun/Mehndi</li>
        <li data-filter=".pasta">Baraat Makeup</li>
        <li data-filter=".fries">Valima Makeup</li>
      </ul>

      <div class="filters-content">
       <div class="row grid">

    @foreach($allmenu as $item)

        <div class="col-sm-6 col-lg-4 all">

            <div class="box">
                <div>

                    <div class="img-box">
                        <img src="{{ asset('upload/' . $item->image) }}"
                             alt="{{ $item->heading }}">
                    </div>

                    <div class="detail-box">

                        <h5>
                            {{ $item->heading }}
                        </h5>

                        <p>
                            {{ $item->description }}
                        </p>

                        <div class="options">

                            <h6>
                                {{ $item->price }} PKR
                            </h6>

                            <a href="">
                                <svg version="1.1"
                                     id="Capa_1"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px"
                                     y="0px"
                                     viewBox="0 0 456.029 456.029"
                                     style="enable-background:new 0 0 456.029 456.029;"
                                     xml:space="preserve">

                                    <!-- Keep your existing SVG paths here -->

                                </svg>
                            </a>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    @endforeach

</div>
      </div>
      <div class="btn-box">
        <a href="">
          
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

 @endsection