<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>VTC</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .jumbotron {
            padding-top: 3rem;
            padding-bottom: 3rem;
            margin-bottom: 0;
            background-color: #fff;
        }
        @media (min-width: 768px) {
            .jumbotron {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }
        }
        .jumbotron p:last-child {
            margin-bottom: 0;
        }

        .jumbotron-heading {
            font-weight: 300;
        }

        .jumbotron .container {
            max-width: 40rem;
        }

        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="<?= url('/') ?>" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"
                        focusable="false" aria-hidden="true">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>VTC</strong>
                </a>
                        <?php view('links'); ?>

            </div>
        </div>
    </header>

    <main role="main">


        <div class="album py-5 bg-light">
            <div class="container">

                <?= $content ?>

            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.2/getting-started/introduction/">getting
                    started guide</a>.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <script>

        $('#conducteurCancelEdit').on('click', function() {

            $(this).hide();
            $('#conducteurId').val('');
            $('#conducteurPrenom').val('');
            $('#conducteurNom').val('');

            $('#conducteurSubmit')  .removeClass('btn-warning')
                                    .addClass('btn-primary')
                                    .html('Ajouter un conducteur')

        });

        $('.delete').on('click',function(e) {
            var answer = confirm('Confirmez-vous la suppression ?');
            if(!answer) { e.preventDefault(); }
        });

        $('.edit-conducteur').on('click', function() {

            $('#conducteurCancelEdit').show();

            $('#conducteurId').val($(this).data('id'));
        
            $('#conducteurPrenom').val(
                $(this).data('prenom')
            );

            $('#text').html(
                'On mange des ' + $(this).data('patate')
            );


            $('#conducteurNom').val($(this).data('nom'));

            $('#conducteurSubmit')  .removeClass('btn-primary')
                                    .addClass('btn-warning')
                                    .html('Modifier ce conducteur');            
        });

        $('.edit-vehicule').on('click', function() {

            $('#vehiculeId').val($(this).data('id'));
            $('#vehiculeMarque').val($(this).data('marque'));
            $('#vehiculeModele').val($(this).data('modele'));
            $('#vehiculeCouleur').val($(this).data('couleur'));
            $('#vehiculeImmatriculation').val($(this).data('immatriculation'));

            $('#vehiculeSubmit')  .removeClass('btn-primary')
                                    .addClass('btn-warning')
                                    .html('Modifier ce véhicule');            
        });

        $('.edit-association').on('click', function() {

            $('#associationId').val($(this).data('id'));

            $('#associationIdConducteur').val($(this).data('idconducteur'));
            $('#associationIdVehicule').val($(this).data('idvehicule'));

            $('#associationSubmit')  .removeClass('btn-primary')
                                    .addClass('btn-warning')
                                    .html('Modifier cette association');            
        });

    </script>
</body>

</html>
