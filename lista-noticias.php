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
                    <a class="btn btn-primary" href="lista-noticias.php">
                        <li>Home</li>
                    </a>
                    <a class="btn btn-primary" href="">
                        <li>Contato</li>
                    </a>
                    <a class="btn btn-primary" href="editor.php">
                        <li>Inserir Noticia</li>
                    </a>
                    <div class="barra" style="height:50px; border-right:1px solid black;"></div>
                    <h6 style="display:flex; align-items:center;  height:40px; margin:5px;">Olá!   <?php echo $_SESSION['email'];?>   </h6>
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
                    echo "<button type='".$type."' class='".$btn."' data-bs-toggle='".$datatog."' data-bs-target='#".$ide."-".$noticia['id']."'>  Clique para ler mais </button>             ";
                    echo "</div>";
                    echo "</div>";
                
                    echo '<div class="' . $modal . '" id="' . $ide . '-' . $noticia['id'] . '" tabindex="' . $tabindex . '" aria-labelledby="' . $ariale . '" aria-hidden="' . $ariah . '">';                  
                    echo '<div class="'.$modald.'">';
                    echo '<div class="'.$modalc.'" >';
                    echo '<div class="'.$modalh.'">';
                    echo '<h1 class="' . $h1class . '" id="' . $idh1 . '">' . $noticia['titulo'] . '</h1>';
                    echo '<button type="' . $type . '" class="' . $btnclose . '" data-bs-dismiss="' . $datatog . '" aria-label="' . $arial . '"></button>';
                    echo '</div>';
                    echo "<div class='" . $modalbody . "'>" . $noticia['conteudo'] . "</div>";
                    echo "<div class='".$modalfooter."'>";
                    echo "<button type='".$type."' class='".$btnsen."' data-bs-dismiss='".$datatog."'>Close</button>";
                    echo "<button type='" . $type . "' class='" . $btn . "'>Salvar alterações</button>";
                    echo "</div>";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div> ";
                }


                 
                                     


 ?>

        </div>
        </div>
        <div class="area_right">
            <div class="right_full" style="margin:20px;">
                <div class="searcharea">
                    <br>
                    <h6>Àrea de pesquisa</h6>
                <div class="titlepes" style="display:flex; align-items:center; justify-content:center; height:80px;">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></span>
                <input id="searchbar" name="searchbar" type="search" placeholder="pesquisar" onkeyup="search()">
                </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
         <img src="img/LogoFICR.png" style="width:100px; height:50px;" >
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
</div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
