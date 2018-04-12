@extends('layouts.app')
    
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

               <div class="left-box">        
                   <div class="card-profile">
                        <div class="card-body">
                            <h3 class="card-title">{{ $users->role }}</h3>
                            <h3 class="card-title">{{ $users->lastname }}</h3>
                            <h3 class="card-title">{{ $users->name }}</h3>
                            <h3 class="card-title">{{ $users->email }}</h3>
                        </div>
                   </div>
                                    
                        <div class="box-roles">
                        @foreach ($communautes as $communaute)
                            <button type="button" class="btn btn-dark" onclick="location.href='{{ route('channel'), auth()->id() }}'">{{ $communaute->nom_commu }}</button>
                        @endforeach
                        </div>    
                  
               </div>
               
             
               <div class="right-box">
                  @yield('channel')
                  @yield('chat')
               </div>
       
               
           </div>
       </div>
   </div>
</div>
@endsection