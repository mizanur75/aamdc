@extends('layouts.backend.app')
@section('title','Slide create')
@push('custom-css')

@endpush
@section('content')
    
<div class="container-fluid">
    <div class="block-header">
  
<!-- Vertical Layout | With Floating Label -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   ADD NEW SLIDE
                   
                </h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
            <div class="body">
            <form action="{{ route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" id="email_address" class="form-control" name="title">
                            <label class="form-label">Slide Title</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="file" name="image" id="">
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                <a href="{{ route('admin.slider.index') }}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Vertical Layout | With Floating Label -->

</div>
@endsection
@push('js')
    
@endpush

