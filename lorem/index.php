
<?php
//affichage dynamique de contenu.php en f° des données déjà présentes dans la bdd
include_once('donnees_contenu.php');
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Delidess</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body id="home" data-spy="scroll" data-target=".navbar" data-offset="100">

        <!-- message d'erreur -->
        <?php if(isset($_GET['err']) && $_GET['err'] == '1') { ?>
            <div class="alert alert-danger">
              <strong>Erreur!</strong> Une erreur est survenue lors de l'envoi des informations, veuillez recommencer.
            </div>
          <?php
            }
            elseif(isset($_GET['err']) && $_GET['err'] == '2') { ?>
            <div class="alert alert-warning">
              <strong>Erreur!</strong> Le poids des images ne doit pas excéder 250Mo.
            </div>
          <?php
            }
          ?>

    <!-- Barre de navigation -->
    <nav>
        <ul class="main-nav nav nav-tabs">
            <li class="nav-item active"><a href="#accueil" class="nav-link" data-toggle="tab">Accueil</a></li>
            <li class="nav-item active"><a href="#apropos" class="nav-link" data-toggle="tab">A Propos</a></li>
            <li class="nav-item active"><a href="#nosdesserts" class="nav-link" data-toggle="tab">Nos desserts</a></li>
            <li class="nav-item active"><a href="#blog" class="nav-link" data-toggle="tab">Blog</a></li>
            <li class="nav-item active"><a href="#contact" class="nav-link" data-toggle="tab">Contact</a></li>
        </ul>
    </nav>
    <form method="post" action="modif.php" class="tab-content" enctype="multipart/form-data">
    <!-- Corps du texte -->
    <div id="accueil" class="tab-pane fade in active show">
    <div class="jumbotron jumbotron-fluid text-black" id="slide-accueil">
        <div class="container pt-5 text-center">
            <form method="post" action="traitement.php">
                <textarea placeholder="TITRE H1" name="texte1" id="area2" rows="3" cols="20"><?php if(isset($contenuTexte1)){echo $contenuTexte1;} ?></textarea>
            </form>  
          <form  method="post" action="traitement.php">
            <textarea placeholder="texte de 30 mots" name="texte2" id="area2" rows="3" cols="50"><?php if(isset($contenuTexte2)){echo $contenuTexte2;} ?></textarea>
          </form>  
        </div>
    </div>
    <div class="container">
        <div>
            <div class="text-sm-center w-auto">
                <h2>Nos Desserts</h2>
            </div>
            <form class="text-sm-center" method="post" action="traitement.php">
                <textarea placeholder="texte de 20 mots" name="texte3" id="area2" rows="3" cols="50"><?php if(isset($contenuTexte3)){echo $contenuTexte3;} ?></textarea>
            </form> 
        </div>
        <div class="row">
            <div class="col-sm-3 mt-5">
                <img src="img/gris.jpg">
            </div>
            <div class="col-sm-3 mt-5">
                <div class="col-sm-12">
                    <h3>Gamme<br>Traditionnelle</h3>
                </div>
                <div class="col-sm-6">
                    <form class="text-sm-center" method="post" action="traitement.php">
                        <textarea placeholder="texte de 20 mots" name="texte4" id="area2" rows="10" cols="20"><?php if(isset($contenuTexte4)){echo $contenuTexte4;} ?></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-sm-3 mt-5">
                <img src="img/gris.jpg">
            </div>
            <div class="col-sm-3 mt-5">
                <div class="col-sm-12">
                    <h3>Desserts<br>Bio & Vegan</h3>
                </div>
                <div class="col-sm-6">
                    <form class="text-sm-center" method="post" action="traitement.php">
                        <textarea placeholder="texte de 20 mots" name="texte5" id="area2" rows="10" cols="20"><?php if(isset($contenuTexte5)){echo $contenuTexte5;} ?></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mt-5">
                <img src="img/gris.jpg">
            </div>
            <div class="col-sm-3 mt-5">
                <div class="col-sm-12">
                    <h3>Gamme<br>Tartelettes</h3>
                </div>
                <div class="col-sm-6">
                    <form class="text-sm-center" method="post" action="traitement.php">
                        <textarea placeholder="texte de 20 mots" name="texte6" id="area2" rows="10" cols="20"><?php if(isset($contenuTexte6)){echo $contenuTexte6;} ?></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-sm-3 mt-5">
                <img src="img/gris.jpg">
            </div>
            <div class="col-sm-3 mt-5">
                <div class="col-sm-12">
                    <h3>Gamme<br>Cheescake</h3>
                </div>
                <div class="col-sm-6">
                    <form class="text-sm-center" method="post" action="traitement.php">
                        <textarea placeholder="texte de 20 mots" name="texte7" id="area2" rows="10" cols="20"><?php if(isset($contenuTexte7)){echo $contenuTexte7;} ?></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mt-5">
                <img src="img/gris.jpg">
            </div>
            <div class="col-sm-3 mt-5">
                <div class="col-sm-12">
                    <h3>Gamme<br>Desserts cuits</h3>
                </div>
                <div class="col-sm-6">
                    <form class="text-sm-center" method="post" action="traitement.php">
                        <textarea placeholder="texte de 20 mots" name="texte8" id="area2" rows="10" cols="20"><?php if(isset($contenuTexte8)){echo $contenuTexte8;} ?></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-end mb-5">
            <div class="col-sm-3 mt-5">
                <img src="img/gris.jpg">
            </div>
            <div class="col-sm-3 mt-5">
                <div class="col-sm-12">
                    <h3>Gamme<br>Mousse</h3>
                </div>
                <div class="col-sm-6">
                    <form class="text-sm-center" method="post" action="traitement.php">
                        <textarea placeholder="texte de 20 mots" name="texte9" id="area2" rows="10" cols="20"><?php if(isset($contenuTexte9)){echo $contenuTexte9;} ?></textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-6 ">
                <div class="mb-5">
                    <h3>Notre savoir faire</h3>
                </div>
                <div class="d-flex align-items-center ">
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte10" id="area2" rows="10" cols="50"><?php if(isset($contenuTexte10)){echo $contenuTexte10;} ?></textarea>
                </form>
            </div>
            </div>
            <div class="col-sm-6 text-center">
                <img src="img/gris3.jpg">
            </div>
        </div>
    </div>
    </div>


<!-- /PAGE ACCUEIL -->


<!-- PAGE A PROPOS -->

    <div id="apropos" class="tab-pane fade in"></div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h1>Présentation de l'activité</h1>
            </div>
            <div class="col-sm-12">
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte11" id="area2" rows="5" cols="100"><?php if(isset($contenuTexte11)){echo $contenuTexte11;} ?></textarea>
                </form>
            </div>    
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-4">
                <div>
                    <h3>PRODUITS AUTHENTIQUES</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte12" id="area2" rows="6" cols="30"><?php if(isset($contenuTexte12)){echo $contenuTexte12;} ?></textarea>
                </form>
            </div>
            <div class="col-sm-4">
                <div>
                    <h3>SELECTION DES INGREDIENTS</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte13" id="area2" rows="6" cols="30"><?php if(isset($contenuTexte13)){echo $contenuTexte13;} ?></textarea>
                </form>
            </div>
            <div class="col-sm-4">
                <div>
                    <h3>CAPACITE D'INNOVATION</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte14" id="area2" rows="6" cols="30"><?php if(isset($contenuTexte14)){echo $contenuTexte14;} ?></textarea>
                </form>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row text-center">
            <div class="col-sm-6">
                <div>
                    <h3>Notre histoire</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte15" id="area2" rows="15" cols="40"><?php if(isset($contenuTexte15)){echo $contenuTexte15;} ?></textarea>
                </form>
            </div>
            <div class="col-sm-6">
                <img src="img/gris3.jpg">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center mt-3">
            <div class="col-sm-6">
                <img src="img/gris3.jpg">
            </div>
            <div class="col-sm-6 mt-5">
                <div>
                    <h3>Engagement environnemental</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte16" id="area2" rows="15" cols="40"><?php if(isset($contenuTexte16)){echo $contenuTexte16;} ?></textarea>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <form method="post" action="traitement.php">
            <textarea placeholder="texte de 100 mots" name="texte17" id="area2" rows="5" cols="90"><?php if(isset($contenuTexte17)){echo $contenuTexte17;} ?></textarea>
        </form>
    </div>
    </div>

    <!-- /PAGE A PROPOS -->

    <!-- PAGE NOS DESSERTS -->
    <div id="nosdesserts" class="tab-pane fade in"></div>
    <div class="container">
        <div class="row text-center mt-3">
            <div class="col-sm-6 mt-5">
                <img src="img/gris3.jpg">
            </div>
            <div class="col-sm-6 mt-5">
                <div>
                    <h3>Nos desserts : Gamme traditionnelle</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte18" id="area2" rows="15" cols="40"><?php if(isset($contenuTexte18)){echo $contenuTexte18;} ?></textarea>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-sm-4">
                <div>
                    <h3>FORCES</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte19" id="area2" rows="6" cols="30"><?php if(isset($contenuTexte19)){echo $contenuTexte19;} ?></textarea>
                </form>
            </div>
            <div class="col-sm-4">
                <div>
                    <h3>GARANTIES</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte20" id="area2" rows="6" cols="30"><?php if(isset($contenuTexte20)){echo $contenuTexte20;} ?></textarea>
                </form>
            </div>
            <div class="col-sm-4">
                <div>
                    <h3>CARACTERISTIQUES</h3>
                </div>
                <form method="post" action="traitement.php">
                    <textarea placeholder="texte de 100 mots" name="texte21" id="area2" rows="6" cols="30"><?php if(isset($contenuTexte21)){echo $contenuTexte21;} ?></textarea>
                </form>
            </div>
        </div>        
    </div>
    </div>
<div class="text-center">
    <button type="submit" class="btn btn-primary btn-lg">Sauvegarder</button>
</div>
    <!-- /PAGE NOS DESSERTS -->

     <script>
            $(function(){
                var wordCounts = {};
                $('.comments200words').on('keyup', function(){
                    var matches = this.value.match(/\b/g);
                    wordCounts[this.id] = matches ? matches.length / 2 : 0;
                    var finalCount = 0;
                    $.each(wordCounts, function(k, v) {
                        finalCount += v;
                    });
                    $(this).next().find('.wordcount').html(finalCount);
                });
            });
        </script>
</body>
</form>
</html>