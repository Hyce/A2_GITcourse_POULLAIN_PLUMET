<body>
<?php include '_topbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="musicfeed">
                <h1><i class="fa fa-pencil"></i> Contact</h1>
                <div class="block animated fadeInDown">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                            <div class="contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                            <p>Voulez-vous être mis en contacte avec moi? Remplissez les cases en dessous, j'essaierai de vous répondre dans les 24 heures.</p>



                                            <form name="sentMessage" id="contactForm" novalidate>
                                                <div class="row control-group">
                                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                                        <label>Nom</label>
                                                        <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Entrez votre nom.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="row control-group">
                                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                                        <label>Adresse mail</label>
                                                        <input type="email" class="form-control" placeholder="Adresse mail" id="email" required data-validation-required-message="Entrez votre adresse mail.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="row control-group">
                                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                                        <label>Téléphone</label>
                                                        <input type="tel" class="form-control" placeholder="Téléphone" id="phone" required data-validation-required-message="Entrez votre numéro de téléphone.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="row control-group">
                                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                                        <label>Message</label>
                                                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Entrez un message."></textarea>
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="success"></div>
                                                <div class="row">
                                                    <div class="form-group col-xs-12">
                                                        <button type="submit" class="btn btn-default">Envoyer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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