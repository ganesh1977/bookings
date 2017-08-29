@extends('master')
<div>
@section('title')
	BLOG
@stop

@section('description')
    This is a description
@stop

@section('content')
<style>
div a { margin-left:10px; }
</style>
<div class="home-contanir">        
                <!---Banner---->            
          <div  class="top_links">
            <!----------------------------Gallery----------------->
                  <div class="gailler_box_line" style="float:left;">
                  <div  class="gallery_box"><a href="#">Gallery</a></div>
                  </div>
                  <!-----------------------FAQ----------------->
                  <div class="faq_box_line" style=" float:left;" >
                  <div  class="faq_box"><a href="#">FAQ</a></div>
                  </div>
                   <!-------------------Login --------------------->
                  
                  <!---------------Vendor Zone----------->
                  <div class="vendor_top_line" style="float:left;">
                  <div  class="vendor_zone"><a href="{{url('/vendor_zone')}}">vendor Zone</a></div>
                  </div>
          </div>
</div>          
</div>
@endsection
</div>			