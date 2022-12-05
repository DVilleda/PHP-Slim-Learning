<!doctype html>
<!--UX/UI et Front-end par Yanna, Webcolours.ca-->
<html>

<head>
    <meta charset="UTF-8" />
    <title>Mon Meilleur Compagnon</title>
    <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-1024.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- FONTS -->
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Raleway:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <main id="primary" class="site-main">
        <!--NAVIGATION PAGE D'ACCUEIL-->
        <header class="head-home">
            <section class="container-fluid topnav">
                <div class="container">
                    <nav class="navbar">
                        <div class="branding">
                        </div>
                    </nav>
                </div>
            </section>
        </header>

        <section class="container-fluid module-footer-centre">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">

                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid module-footer-bas">
            <div class="container">
                <div class="row bottom">

                    <div class="col-xl-2 col-md-3 col-12">
                        <h6>INFORMATION</h6>
                    </div>

                    <div class="col-xl-2 col-md-3 col-12">
                        <?= $data['data'] ?>
                        <?= $data['data2'] ?>
                    </div>

                </div>
            </div>
        </section>

        <div class="container-fluid info-baseline">
            <div class="container">
                <div class="contenu">
                    Web design : <a href="https://webcolours.ca/">Webcolours.ca</a> | Développement : <a href="https://www.doussou-formation.com">Doussou-formation.com</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>