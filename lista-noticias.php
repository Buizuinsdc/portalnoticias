<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>

    
<head>
    <title>Página de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/noticiaslist.css">
</head>

<body>
    <header class="area_menu">
        <nav id="list_menu" style="background-color:transparent;">
            <div class="area_logo"><img src="img/LogoFICR.png"></div>
            <div class="menu">
                <ul style="display:flex;">
                    <a href="">
                        <li>Home</li>
                    </a>
                    <a href="">
                        <li>Contato</li>
                    </a>
                    <a href="">
                        <li>Suporte</li>
                    </a>
                </ul>
            </div>
        </nav>
    </header>

    <section class="noti_area">
        <div class="area_left">
            <div class="area_noticias">
            
                <?php
                $sql = "SELECT * FROM noticias";                       
                $resultado = mysqli_query($conexao, $sql);

                $modal ="modal fade";                   $modalbody ="modal-body";
                $ide="exampleModal";                    $modalfooter="modal-footer";
                $card = "card";                         $tabindex="-1";                    $btnsen="btn btn-secondary";
                $cardimg = "card-img-top";              $ariale="exampleModalLabel";
                $width =":100px;";                      $ariah="true";
                $cardbody = "card-body";                $modald="modal-dialog";
                $cardtitle = "card-title";              $modalc="modal-content";
                $cardtext = "card-text";                $modalh="modal-header";
                $btn = "btn btn-primary";               $h1class="modal-title fs-5"; 
                $datatog = "modal";                     $idh1="exampleModalLabel";
                $type="button";                         $btnclose="btn-close";
                $datator="#exampleModal";               $arial="close";
            
                while ($noticia = mysqli_fetch_assoc($resultado)) {

                echo "<div class='".$card."'> ";
                echo "<img src=". $noticia['arquivo'] ."  class='".$cardimg."'/>" ;
                echo "<div class='".$cardbody."'> ";
                echo "<h5 class='".$cardtitle."'> ".$noticia['titulo']."  </h5> ";
                echo "<p class='".$cardtext."'>  ".$noticia['subtexto']."</p> ";
                echo "<label class='".$cardtext."'>Autor:  ".$noticia['autor']."</label> ";
                echo "<button type='".$type."' class='".$btn."' data-bs-toggle='".$datatog."' data-bs-target='".$datator."'>  Clique para ler mais </button>             ";
                echo "</div>";
                echo "</div>";



                echo "
                                
                <div class='".$modal."' id='".$ide."' tabindex='".$tabindex."' aria-labelledby='".$ariale."' aria-hidden='".$ariah."'>
                 <div class='".$modald."'>
                 <div class='".$modalc."'>
                <div class='".$modalh."'>
                <h1 class='".$h1class."' id='".$idh1."'>".$noticia['titulo']."</h1>
                <button type='".$type."' class='".$btnclose."' data-bs-dismiss='".$datatog."' aria-label='".$arial."'></button>
                </div>
                    <div class='".$modalbody."'>
                        ".$noticia['conteudo']."
                    </div>
                <div class='".$modalfooter."'>
                <button type='".$type."' class='".$btnsen."' data-bs-dismiss='".$datatog."'>Close</button>
                <button type='".$type."' class='".$btn."'>Save changes</button>
                
                
                </div>
                </div>
                </div>
                </div>
                
                ";


                    

                  }

                 
              

            </div>

        </div>
        <div class="area_right">
            ..
        </div>
    </section>


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
