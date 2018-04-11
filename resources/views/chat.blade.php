@extends('users.accueil')

@section('chat')               
               <div class="right-box">
                   <div class="box-chat">
                       <div class="discussion">
                           <div class="message">
                               <div class="box-circle"></div>
                               <div class="membre_responsable">
                                   <h1>[Nom] [Prénom]</h1>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis. </p>
                               </div>
                           </div>
                           <div class="reponse">
                               <div class="box-circle"></div>
                               <div class="membre_invites">
                                   <h2>[Nom] [Prénom]</h2>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis. </p>
                                   <a href="#">Modifier</a>
                               </div>
                           </div>
                       </div>
                               <div class="post_discussion">
                                   <form action="#" class="form-group">
                                       <input type="text" name="comment" class="form-control inline" placeholder="Envoyer votre message">
                                       <button type="submit" name="submit" class="btn btn-dark inline">Envoyer</button>
                                   </form>
                               </div>
                    </div>
                  </div>
@endsection