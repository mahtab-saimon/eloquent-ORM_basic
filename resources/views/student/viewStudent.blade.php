@extends('welcome')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
       
     
      <div class="text-center">
      	
      	 	
      	   <h3 class="">{{ $student->name }}</h3>
      	   <p>{{ $student->email }}</p>
      	   <p>{{ $student->phone }}</p>

      </div>
     </div>
   </div>
</div>
@endsection