@extends('welcome')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('all.post') }}" class="btn btn-info">All Post</a>
       
      <hr>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif

       <form action="{{url('updateStudent/'.$student->id)}}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Student name</label>
             <input type="text" class="form-control" value="{{ $student->name }}" name="name" required >
           </div>
         </div>
           <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Student Phone</label>
             <input class="form-control" required name="email" value="{{ $student->email }}">
           </div>
         </div>
           <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Student Phone</label>
             <input  class="form-control" required name="phone" value="{{ $student->phone }}">
           </div>
         </div>
         <div id="success"></div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
         </div>
       </form>
     </div>
   </div>
</div>
@endsection