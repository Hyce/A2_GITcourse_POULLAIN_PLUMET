<body>
	<?php include '_topbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-plus"></i> Add a song</h1>
					<div class="block animated fadeInDown">
						<div class="row">
							<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
								<?php
								if(isset($error) && !empty($error)){
									echo '
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										'.$error.'
									</div>';
								}
								?>
								<form action="add_music.php" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title">Title</label>
										<input type="text" name="title" class="form-control">
									</div>
									<div class="form-group">
										<label for="file">Music</label>
										<input type="file" name="music">
										<p>
											Allowed Extensions : .mp3, .ogg, .mp4, .avi
										</p>
									</div>
									<p class="clearfix"><button type="submit" class="valid pull-right"><i class="fa fa-check"></i>Send</button></p>
									<?php
									// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
									if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
									{
										// Testons si le fichier n'est pas trop gros
										if ($_FILES['monfichier']['size'] <= 1000000)
										{
											// Testons si l'extension est autorisée
											$infosfichier = pathinfo($_FILES['monfichier']['name']);
											$extension_upload = $infosfichier['extension'];
											$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
											if (in_array($extension_upload, $extensions_autorisees))
											{
												// On peut valider le fichier et le stocker définitivement
												move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
												echo "L'envoi a bien été effectué !";
											}
										}
									}
									?>
								</form>

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