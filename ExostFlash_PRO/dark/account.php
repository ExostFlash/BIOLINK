
						<!-- About -->
						<div class="pb-2">
		                    <h1 class="title title--h1 first-title title__separate">Account</h1>
					    </div>

					    <div class="pb-0 pb-sm-2">

					    	<form method="post">
					    		<h3 class="title title--h3">Connexion</h3>
					    		<div class="row">
					    			<div class="form-group col-12 col-md-6">
										<i class="font-icon icon-user"></i>
										<input type="text" class="input input__icon form-control" id="id_connexion" name="id_connexion" placeholder="Pseudo/E-mail" required="required" autocomplete="on" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-12 col-md-6">
										<i class="font-icon"><i class="fa-solid fa-lock"></i></i>
										<input type="password" class="input input__icon form-control" id="mdp_connexion" name="mdp_connexion" placeholder="Mot de passe" required="required" autocomplete="on" oninvalid="setCustomValidity('L\'e-mail est incorrect')" onkeyup="setCustomValidity('')">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
					    			<div class="form-group col-12 col-md-6">
									</div>
									<div class="col-12 col-md-6 order-1 order-md-2 text-center">
										<button name="btn_connexion" type="submit" class="btn" style="margin-bottom: 10%;"><i class="font-icon icon-send"></i> Connexion</button>
									</div>
								</div>
							</form>

							<form method="post">
					    		<h3 class="title title--h3">Inscription</h3>
					    		<div class="row">
					    			<div class="form-group col-12 col-md-6">
										<i class="font-icon"><i class="fa-solid fa-user-secret"></i></i>
										<input type="text" class="input input__icon form-control" id="pseudo_inscription" name="pseudo_inscription" placeholder="Pseudo" required="required" autocomplete="on" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-12 col-md-6">
										<i class="font-icon icon-user"></i>
										<input type="text" class="input input__icon form-control" id="fullname_inscription" name="fullname_inscription" placeholder="Nom prénom" required="required" autocomplete="on" oninvalid="setCustomValidity('L\'e-mail est incorrect')" onkeyup="setCustomValidity('')">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
					    			<div class="form-group col-12 col-md-6">
										<i class="font-icon icon-envelope"></i>
										<input type="email" class="input input__icon form-control" id="email_inscription" name="email_inscription" placeholder="Adresse e-mail" required="required" autocomplete="on" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')">
										<div class="help-block with-errors"></div>
									</div>
									<div class="col-12 col-md-6 order-1 order-md-2 text-center">
										<button name="btn_inscription" type="submit" class="btn" style="margin-bottom: 5%;"><i class="font-icon icon-send"></i> Inscription</button>
									</div>
								</div>
								
							</form>

						</div>