@extends('main')
@section('header1')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Features</h1>
      <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
    @component('my_alert')
        @slot('divid')
            modeldiv1
        @endslot
        @slot('title')
            Say welcome
        @endslot
        Welcome
    @endcomponent
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
@endsection

@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
     @component('test')
     @slot('c')
         xxx
     @endslot
            fsdfhjs fhjf sdjf fhsdkjf
     @endcomponent
        @component('my_alert')
        @slot('divid')
        modeldiv2
        @endslot
        @slot('title')
            Good Bye
        @endslot
        @slot('btn_style')
            btn-danger
        @endslot
      Good Bye
      @endcomponent
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
@endsection
