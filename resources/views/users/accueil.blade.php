@extends('layouts.app')
    
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

               <div class="left-box">        
                   <div class="card-profile">
                        <div class="card-body">
                            <h3 class="card-title">{ $users->role }</h3>
                            <h3 class="card-title">{ $users->lastname }</h3>
                            <h3 class="card-title">{ $users->name }</h3>
                             <h3 class="card-title">{ $users->email }</h3>
                        </div>
                   </div>
                                    
                   <div class="box-roles">
                       <button type="button" class="btn btn-dark" onclick="location.href='http://localhost/projet_parent_chat/public/channel/'">Professeur</button>
                       <button type="button" class="btn btn-dark" onclick="location.href='http://localhost/projet_parent_chat/public/channel/'">Parents</button>
                       <button type="button" class="btn btn-dark" onclick="location.href='http://localhost/projet_parent_chat/public/channel/'">Enfants</button>
                       
                   </div>    
               </div>
               
             
               <div class="right-box">
                  @yield('channel')
               </div>
               
               @yield('chat')
               
           </div>
       </div>
   </div>
</div>
@endsection