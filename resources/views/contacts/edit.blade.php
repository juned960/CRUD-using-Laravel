@extends('contacts.layout')
@section('content')
<div class="card">
<div class="card-header text-center"><h3><u>Contact us Page</u></h3></div>
  <div class="card-body">
      
      <div class="row">
        <div class="col-6 mx-auto">
        <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success "></br>
    </form>
        </div>
      </div>
  
  </div>
</div>
@stop