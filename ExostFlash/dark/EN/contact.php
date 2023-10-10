<!-- About -->
<div class="pb-2">
	<h1 class="title title--h1 first-title title__separate">Contact</h1>
</div>

<h2 class="title title--h3">Form</h2>

<form method="post">
	<div class="row">
		<div class="form-group col-12 col-md-6">
			<i class="font-icon icon-user"></i>
			<input type="text" class="input input__icon form-control" id="nameContact" name="nameContact" placeholder="Nom et prénom" required="required" autocomplete="on" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-6">
			<i class="font-icon icon-envelope"></i>
			<input type="email" class="input input__icon form-control" id="emailContact" name="emailContact" placeholder="Adresse e-mail" required="required" autocomplete="on" oninvalid="setCustomValidity('L\'e-mail est incorrect')" onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-12">
			<textarea class="textarea form-control" id="messageContact" name="messageContact" placeholder="Votre message" rows="4" required="required" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')"></textarea>
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
			<div id="validator-contact" class="hidden"></div>
			Vérifier vos E-Mail on sais jamais ^^
		</div>
		<div class="col-12 col-md-6 order-1 order-md-2 text-right">
			<button name="btn_contact" type="submit" class="btn" style="margin-bottom: 5%;"><i class="font-icon icon-send"></i> Envoyer le message</button>
		</div>
	</div>
</form>
</div>