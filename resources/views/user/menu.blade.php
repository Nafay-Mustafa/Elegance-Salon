
@extends('user.headerfooter')
@section('content')
 <style>
    .options .btn-grad {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;

    padding: 6px 10px !important;
    font-size: 11px !important;

    width: auto !important;
    min-width: 0 !important;
    height: 32px !important;

    border-radius: 20px !important;
}

.options .btn-grad svg {
    width: 13px !important;
    height: 13px !important;
    margin-left: 4px !important;
}

 </style>
  <section class="food_section layout_padding"  style="margin:30px;">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Makeup Catagories
        </h2>
      </div>

      <!-- <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Engagemet/Nikkah Makeup</li>
        <li data-filter=".pizza">Mayoun/Mehndi</li>
        <li data-filter=".pasta">Baraat Makeup</li>
        <li data-filter=".fries">Valima Makeup</li>
      </ul> -->

      <div class="filters-content">
       <div class="row grid">

    @foreach($allmenu as $item)

        <div class="col-sm-6 col-lg-4 all">

            <div class="box"  data-aos="fade-up" data-aos-duration="1500">
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
                            
<a href="{{ Auth::check() ? url('/booknow') : route('login') }}" class="btn-grad">
    BOOK NOW
    <svg version="1.1"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 456.029 456.029">
        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248
        c0,29.184,23.552,53.248,53.248,53.248
        c29.184,0,53.248-23.552,53.248-53.248
        C398.336,362.926,374.784,338.862,345.6,338.862z"/>

        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64
        l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
        C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472
        c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
        c4.096,27.136,27.648,47.616,55.296,47.616h212.992
        c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
        C457.728,97.71,450.56,86.958,439.296,84.91z"/>

        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688
        c-29.696,1.536-52.224,26.112-51.2,55.296
        c1.024,28.16,24.064,50.688,52.224,50.688h1.024
        C193.536,443.31,216.576,418.734,215.04,389.55z"/>
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
      </div>
    </div>
  </section>


 @endsection
