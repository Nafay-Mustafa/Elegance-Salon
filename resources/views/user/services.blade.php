@extends('user.headerfooter')
@section('content')
<style>
    /* Accordion container */
.accordion {
    max-width: 1000px;
    margin: 30px auto;
}

/* Space between accordion sections */
.accordion-item {
    margin-bottom: 15px;
    border-radius: 8px !important;
    overflow: hidden;
}

/* Accordion heading */
.accordion-button {
    justify-content: center;
    text-align: center;
    font-weight: 600;
    font-size: 18px;
}

/* Remove Bootstrap blue focus shadow */
.accordion-button:focus {
    box-shadow: none;
}

/* Hover */
.accordion-button:hover {
    background-color: #970909;
    color: white;
}

/* Open/active accordion */
.accordion-button:not(.collapsed) {
    background-color: #970909;
    color: white;
    box-shadow: none;
}

/* Keep the arrow visible and white */
.accordion-button:not(.collapsed)::after {
    filter: brightness(0) invert(1);
}

/* Service text */
.accordion-body {
    text-align: center;
    font-size: 16px;
    line-height: 1.8;
}

/* Individual service lines */
.accordion-body p {
    text-align: center;
    margin-bottom: 10px;
}
</style>


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        SKIN CARE
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Basic Facial 1000/-</p>      
<p>Herbal Facial 1000/-</p> 
<p>Acne Facial 2000/- </p> 
<p>Age Regulate Facial 2000/- </p> 
<p>Double Glow Facial 2500/- </p> 
<p>Whitening Glow Facial 2500/- </p> 
<p>Face Polish Facial 3000/-</p> 
</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       EXCLUSIVE FACE TREATMENT
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Continental Cleansing 2500/- </p>
<p>Purity Cleansing 3000/- </p>      
<p>Gold / Hydrating Treatment 3000/-  </p>      
<p>Brightening Oxygen Oz2 Treatment 4000/- </p>      
<p>Radiant Whitening Glow Treatment 5000/-  </p>      
<p>Sebum Control Treatment 5000/-  </p>      
<p>Rejuvenating Treatment 5000/- </p> 
  
</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
LUXURY FACE TREATMENT
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Luxury Instant Glow Treatment 5500/-</p> 
<p>Biological Treatment 6000/- </p> 
<p>Hydra sebum Control Treatment 6000/-</p>   
<p>Hydra Radiant Whitening Glow Treatment 6000/-</p>   
<p>Hydra Rejuvenating Treatment 6000/-</p>   
<p>Renewal Hydradermie Treatment 7000/-</p> 
<p>Renewal Hydradermie Lifting Treatment 8000/-</p>  
  </div>
    </div>
  </div>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       FACIALS
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Double Glow Facial + Whitening Bleach Rs. 3500/-</p> 
<p>Brightening Oxygen Oz2 Facial + Whitening Bleach Rs. 5000/-</p>     
<p>Luxury Instant Glow Treatment + Sandle Bleach Rs. 6500/-</p>     
<p>Renewal Hydradermie Treatment + Sandle Bleach Rs. 8000/-</p> 
<p>Renewal Hydradermie Lift Treatment + Sandle Bleach Rs. 9000/-</p>    

 </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
     MANICURE & PEDICURE
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Casual Manicure + Casual Pedicure + Hand & Feet Bleach with Mask Rs. 3600/-</p>
<p>Exclusive Manicure + Exclusive Pedicure + Hand & Feet Bleach with Mask Rs. 4600/-</p>  
<p>Luxury Manicure + Luxury Pedicure + Hand & Feet Bleach with Mask Rs. 6100/-</p>    
  

  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       WAXING 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Casual Full Arms + Full Legs Waxing Rs. 1800/-</p>    
<p>Rica Full Arms + Full legs WaxingRs. 2950/-</p>    

       </div>
    </div>
  </div>
</div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    EXCLUSIVE MAKEUP
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Glamour Eye Makeup 4000/- </p> 
<p>Soft Party Makeup 5000/-</p>   
<p>Glamour Party Makeup 10000/- </p>   
<p>Smokey Makeup 12000/- </p>   


   </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       THREADING
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>Thread Casual Rica Upper Lip 100/-</p>   
<p>Lower Lip 100/-</p> 
<p>Chin 100/-</p>   
<p>Cheeks 150/-</p>   
<p>Forehead 150/-</p>   
<p>Nose Wax 200/-</p>
<p>Full Face 1000/-</p>    

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       MEHNDI
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<P>Mehndi (per side)
500/-</p>
<P>Uroosa Mehndi (per side)
800/-</p>
<P>Feet Mehndi
1000/-</P> 
<P>Engagement Mehndi
4000/-</p>
<P>on words
Bridal Mehndi
5000/-</p> 
    </div>
    </div>
  </div>
</div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        HAIRCUT
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <P>Straight Hair Cut
800/-
<P>Front Bangs
800/-</p>
<P>Curtain Bangs
1000/-</p>
<P>U Shaped Hair Cut
1000/-</p>
<P>Front Layer Cut
1000/-</p>
<P>Split End
1500/-</p>
<P>Bob Hair Cut
2000/-</p>
<P>Step Cut
2000/-</p>
<P>Layers
2000/- </P>
    </div>
    </div>
  </div>
  
@endsection