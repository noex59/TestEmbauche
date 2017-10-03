<p>
	{if $status == 'true'}
		Bien enregistré !
		{else}
			Quelque chose ne vas pas...
	{/if}
</p>

<form method="post">
	<label>Titre</label>
	<input type="text" name="title">
	<label>Contenu</label>
	<input type="text" name="contenu">
	<input type="submit" value="Enregistrer">
</form>