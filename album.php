<body>
<?php include '_topbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="musicfeed">
                <h1><i class="fa fa-pencil"></i> Albums</h1>
                <div class="block animated fadeInDown">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                            <div class="albums">
                                <?php
                                session_start();
                                require('config/config.php');
                                require('model/functions.fn.php');

                                if( isset($_FILES['music']) && !empty($_FILES['music']) &&
                                isset($_POST['title']) && !empty($_POST['title'])){

                                $file = $_FILES['music'];

                                // Si le "fichier" reçu est bien un fichier
                                $ext = strtolower(substr(strrchr($file['name'], '.')  ,1));
                                // Vérification des extentions
                                if (preg_match('/\.(mp3|ogg)$/i', $file['name'])) {
                                $filename = md5(uniqid(rand(), true));
                                $destination = "musics/{$filename}.{$_SESSION['id']}.{$ext}";

                                // TODO

                                } else {
                                $error = 'Erreur, le fichier n\'a pas une extension autorisée !';
                                }
                                // }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '_footer.php';
?>