<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Générateur de Communiqués / NewsLetters</title>
    <!-- Start Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/jquery-ui-1.11.1.custom/jquery-ui.min.js"></script>
    <link href="js/jquery-ui-1.11.1.custom/jquery-ui.min.css" rel="stylesheet">
    <link href="js/jquery-ui-1.11.1.custom/jquery-ui.theme.css" rel="stylesheet">
    <link href="js/jquery-ui-1.11.1.custom/jquery-ui.structure.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="js/plupload/js/plupload.full.min.js"></script>
    <script src="js/plupload/js/jquery.ui.plupload/jquery.ui.plupload.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/plupload/js/i18n/fr.js"></script>
    
<!-- End Scripts -->
    <link href="js/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header class="main-header">
        <div class="main-logo">
            <a href="index.html"><i class="fa fa-code"></i></a>
        </div>
        <div class="main-menu">
            <div class="menu-lang">
                <a href="#" class="active">Fr</a> |
                <a href="#">En</a> |
                <a href="#">De</a> |
                <a href="#">Es</a> |
                <a href="#">Nl</a>
                <a href="#" class="icns-param" id="menu"><i class="fa fa-cog"></i></a>
            </div>
        <nav class="menu-param" id="submenu">
            <p class="title">Choisir un template</p>
            <a href="#">Communiqué de presse</a>
            <a href="#">E-mailling</a>
            <a href="#">Newsletter</a>
        </nav>
        </div>
    </header>

    <section class="email-container">
        <p class="link-mail">Si vous ne parvenez pas à lire ce mail cliquez : <a href="#">ici</a></p>
        <div class="email-template">
            <div id="plupload" class="email-cover">
                <img src="img/place-it.jpg" alt="">
                <button type="button">Ajouter une image</button>
            </div>
            <div class="email-body">
                <div class="email-title">
                    <h1 id="title_template" class="edit_title tinymce-editable">Titre d'exemple - cliquez pour modifier</h1>
                    <div class="edit-tools">
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a class="trash_titre" href="#"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <div class="email-text-area">
                    <div class="text-area-content tinymce-editable">Zone de Texte d'exemple - Cliquez pour modifier</div>
                    <div class="edit-tools">
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <div class="email-add-section">
                    <select name="add-type" id="slct_type">
                        <option value="" selected>Choisir un nouveau bloc ...</option>
                        <option value="texte">Ajouter une zone de texte</option>
                        <option value="image">Ajouter une image</option>
                        <option value="titre">Ajouter un titre</option>
                    </select>
                    <input id="add_content" type="submit" value="+">
                </div>
            </div>
        </div>
        <div id="uploader" style="width : 1000px ; height : 200px"></div>
    </section>

    <footer class="main-footer">
        <a href="" class="btn btn-primary">Exporter le html 
            <?php
                // $homepage = file_get_contents('http://swaaaf.hebergratuit.net/template/index_fr.php');
                // $filname = "mon_fichier"; 
                // $open = fopen($filename.".html", "w");
                // fwrite($open, $homepage); 
                // fclose($open); 
            ?>
        <i class="fa fa-share-square-o"></i></a>
    </footer>


</body>

</html>