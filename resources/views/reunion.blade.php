@extends('layouts.frontend.app')
@section('title')

@push('custom-css')
<style>
        .tales {
        width: 100%;
      }
      .carousel-inner{
        width:100%;
        max-height: 400px !important;
}
    </style>
@endpush
   
@endsection


@section('containt')

<section class="login first grey">
    <div class="container">
       <div class="row">
           <div class="col-md-2"></div>   
           <div class="col-md-8">
           <form action="{{ route('reunion.store')}}" method="POST">
                   @csrf
                   <input type="text" name="member_type" placeholder="member_type">
                   <input type="text" name="name" placeholder="name">
                   <input type="text" name="session" placeholder="session">
                   <input type="text" name="study" placeholder="study">
                   <input type="text" name="mobile" placeholder="mobile">
                   <input type="text" name="email" placeholder="email">
                   <input type="text" name="payment_type" placeholder="payment_type">
                   <input type="text" name="payment_number" placeholder="payment_number">
                   <input type="text" name="txid" placeholder="txid">
                   <input type="text" name="payment_time" placeholder="payment_time">
                   <input type="text" name="payment_Fee" placeholder="payment_Fee">
                   <input type="text" name="spouse" placeholder="spouse">
                   <input type="text" name="kids" placeholder="kids">
                   <button type="submit">Submit</button>
               </form>
              <h3>Reunion form will be available 13-12-2019</h3>  
            </div>   
           <div class="col-md-2"></div>   
       </div>
    </div>
</section>
    
</section> 
@endsection
@push('custom-js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
@endpush