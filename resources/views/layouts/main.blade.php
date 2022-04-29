   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=@, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
           integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>Document</title>
   </head>

   <body>
       @include('layouts.nav')
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
       </script>
       <main>
           @yield('main')



           <h4>c'est le main</h4>


           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
               data-bs-whatever="@fat">Ajout auteur</button>


           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Nouvel Auteur</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                               aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                           <form action="/livres" method="POST">
                               @csrf
                               <div class="mb-3">
                                   <label for="recipient-name" class="col-form-label">Titre de l'oeuvre:</label>
                                   <input type="text" name="titre" class="form-control" id="titre">
                               </div>
                               <div class="mb-3">
                                   <label for="recipient-name" class="col-form-label">Prenom:</label>
                                   <input type="text" name="prenom" class="form-control" id="prenom">
                               </div>
                               <div class="mb-3">
                                   <label for="recipient-name" class="col-form-label">Nom:</label>
                                   <input type="text" name="nom" class="form-control" id="nom">
                               </div>
                               <input type="submit">
                           </form>
                       </div>

                   </div>
               </div>
           </div>

       </main>
       @include('layouts.footer')
   </body>

   </html>
