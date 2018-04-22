@extends('users.accueil')

@section('chat')               
               
                   <div class="box-chat">
                       <div class="discussion">
                           <!--<div class="message">
                               <div class="box-circle"></div>
                               <div class="membre_responsable">
                                   <h1>[Nom] [Prénom]</h1>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis. </p>
                               </div>
                           </div>-->
                           
                           @foreach($posts as $post)
                           <div class="reponse">
                               <div class="box-circle"></div>
                               <div class="membre_invites">
                                   <h2>{{ $users->name }} {{ $users->lastname}}</h2>
                                   <p>{{ $post->texte }}</p>
                                   <a href="#">Modifier</a>
                               </div>
                           </div>
                           @endforeach
                           
                       		</div>
                               <div class="post_discussion">
                                   <form action="{{route('post.create')}}" class="form-group" method="POST">
                                   {{ csrf_field() }}
                                       <input type="text" name="texte" class="form-control inline" placeholder="Envoyer votre message">
                                       <button type="submit" name="submit" class="btn btn-dark inline">Envoyer</button>
                               		</form>
                            	</div>
                    </div>
                  
@endsection