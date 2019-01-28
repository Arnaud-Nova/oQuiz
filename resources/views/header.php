<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Reset CSS -->
        <link href="<?= $_SERVER['BASE_URI'] . '/css/reset.css' ?>"  rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Google fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= route('home') . '/css/app.css' ?>" rel="stylesheet">

        <title><?= $title ?></title>
    </head>
    <body>
        <main class="container">

            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

                <ul class="nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link d-inline text-blue" href="<?= route('home') ?>">
                        <h1 >O'Quiz</h1>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-pills justify-content-end align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= route('home') ?>">
                            <i class="fas fa-home"></i>
                            Acceuil
                        </a>
                    </li>
                    <li class="nav-item">

                                <button type="button" class="btn-link btn btn-primary border-0" data-toggle="modal" data-target="#exampleModalCenter">
                                Connexion
                                </button>

                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Déjà inscrit !</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="container d-flex flex-column" method="post" action="">
                                            <div class="row mt-1"><label class="col-7" for="">Email d'inscription</label>
                                            <input class="col-4" type="email" placeholder="Adresse email"></div>
                                            
                                            <div class="row mt-1"><label class="col-7" for="">Mot de passe</label>
                                            <input class="col-4" type="password"></div>
                                            
                                            <button type="submit" class="btn btn-primary col-3 align-self-end mt-2">Valider</button>
                                        </form>
                                        <br>
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Inscrivez vous</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <form id="signup" class="container d-flex flex-column" method="post" action="">
                                            <div class="row">
                                                <label class="col-7" for="email">Indiquez votre email</label>
                                                <input class="col-4" id=email type="email" placeholder="Adresse email">
                                            </div>
                                            
                                            <div class="row mt-1">
                                                <label class="col-7" for="firstname">Prénom</label>
                                                <input class="col-4" id="firstname" type="text" placeholder="Votre prénom">
                                            </div>

                                            <div class="row mt-1">
                                                <label class="col-7" for="lastname">Nom</label>
                                                <input class="col-4" id="lastname" type="text" placeholder="Votre nom">
                                            </div>
                                            
                                            <div class="row mt-1">
                                                <label class="col-7" for="password">Mot de passe</label>
                                                <input class="col-4" id="password" type="password">
                                            </div>
                                            
                                            <div class="row mt-1">
                                                <label class="col-7" for="confirmpassword"> Confirmez le mot de passe</label>
                                                <input class="col-4" id="confirmpassword" type="password">
                                            </div>
                                            <div class="error-target"></div>
                                            <button type="submit" class="btn btn-primary col-3 align-self-end mt-2">Valider</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>

                </ul>
            </nav>