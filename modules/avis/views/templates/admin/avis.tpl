<p>
	{if $status == 'true'}
		Bien enregistré !
		{else}
			Quelque chose ne vas pas...

	{/if}
</p>

<form method="post">
	<label>Titre</label>
	<input
        class="form-control"
        name="titre"
        placeholder="votre titre"
    ></br>
	<label>Contenu</label>
	<textarea
	    class="form-control"
	    name="contenu"
	    placeholder="votre commentaire"
	    rows="3"
	>
    </textarea></br>
	<input type="submit" value="Enregistrer">
</form>