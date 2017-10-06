<p>
	{if $status == 'true'}
		Bien enregistré !
		{else}
			Quelque chose ne vas pas...
	{/if}
</p>

<h2>Liste des avis</h2>

<table style="width:100%;border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th>Titre</th>
    <th>Contenu</th> 
    <th>Date d'ajout</th>
    <th>Date de modif</th>
  </tr>
  {foreach from=$contenuAvis item=row}
	  <tr style="border: 1px solid black;">
	    <td>{$row['titre']}</td>
	    <td>{$row['contenu']}</td> 
	    <td>{$row['dateAjout']}</td>
	    <td>{$row['dateUpdate']}</td>
	  </tr>
  {/foreach}
</table>

<p>{$titre}</p>
<p>{$contenu}</p>

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
	<input type="submit" class='btn btn-default pull-right' value="Enregistrer">
</form>