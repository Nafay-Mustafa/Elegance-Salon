
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


                        </div>

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

  <!-- end food section -->

 @endsection