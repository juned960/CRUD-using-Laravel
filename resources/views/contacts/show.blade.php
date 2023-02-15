@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header text-center"><h3><b><u>Contactus Page</u></b></h3></div>
  <div class="card-body">
  
        <div class="container ">
            <div class="row ">
                <div class="col-4 border mx-auto">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $contacts->name }}</h5>
                    <p class="card-text">Address : {{ $contacts->address }}</p>
                    <p class="card-text">Phone : {{ $contacts->mobile }}</p>
                </div>
            </div>
        </div>
  </div>
      
    </hr>
  
  </div>
</div>