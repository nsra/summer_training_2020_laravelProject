<div class="container">

    
<div class="row">

  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <div class="d-flex flex-nowrap">
         <img src="{{asset('/control/assets/layouts/layout/img/toptech.jpg')}}" style="width: 125px" class="mr-2"/> 
         <h6 class="mr-2 mt-2">{{$company->name}}</h6>
      </div>
    <p class="mt-2">{{$company->description}}</p>
  </div>

  <hr class="w-100 clearfix d-md-none">

  
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="mb-4">{{__('lang.important_links')}}</h6>
    <p>
      <a href="#!">{{__('lang.contact_us')}}</a>
    </p>
    <p>
      <a href="#!">{{__('lang.about_site')}}</a>
    </p>
    <p>
      <a href="we-avocode.html">{{__('lang.how_we_are')}}</a>
    </p>
  </div>
  

  <hr class="w-100 clearfix d-md-none">


  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="mb-4">{{__('lang.about_us')}}</h6>
    <p>
      <a href="#!">{{__('lang.laws_and_provisions')}}</a>
    </p>
    <p>
      <a href="#!">{{__('lang.privacy_policy')}}</a>
    </p>
  </div>

 
  <hr class="w-100 clearfix d-md-none">


  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 ">
    <h6 class="mb-4">{{__('lang.contact_us')}}</h6>
    <p>
      <i class="fas fa-map-marker-alt pl-3"></i> {{$company->address}}</p>
    <p>
      <i class="fas fa-envelope pl-3"></i> {{$company->email}}</p>
    <p>
      <i class="fab fa-whatsapp pl-3"></i>{{$company->whatsapp}}</p>
  </div>


</div>


<hr>

<div class="row d-flex pb-3">

 
  <div class="col-md-7 col-lg-8">

    <p>{{__($company->footer)}}<span class="pr-1">2020</span></p>
  </div>
  
  <div class="col-md-5 col-lg-4 ml-lg-0">

  
    <div class=" text-md-right">
      <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
           <i class="fab fa-youtube"></i>
          </a>
        </li>
          <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
           <i class="fas fa-bell"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
           <i class="fab fa-linkedin-in"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
          <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>