<p>
	{if $status == 'true'}
		Bien enregistré !
	{/if}
</p>

<h2>Liste des avis</h2>

<table style="width:100%;border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th>Titre</th>
    <th>Contenu</th> 
    <th>Date d'ajout</th>
    <th>Date de modif</th>
    <th>Actions</th>
  </tr>
  {foreach from=$contenuAvis item=row}
	  <tr style="border: 1px solid black;">
	    <td>{$row['titre']}</td>
	    <td>{$row['contenu']}</td> 
	    <td>{$row['dateAjout']}</td>
	    <td>{$row['dateUpdate']}</td>
	    <td>
	    	<a href="http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}&id={$row['id']}&action=modifier"><button>Modifier</button></a>

	    	<a href="http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}&id={$row['id']}&action=supprimer"><button>Supprimer</button></a>

	    </td>
	  </tr>
  {/foreach}
</table>


<form method="post">
	<label>Titre</label>
	<input
        class="form-control"
        name="titre"
        placeholder="votre titre"
		{if isset($valeurs)} value="{$valeurs[0]['titre']}" {/if}
    ></br>
	<label>Contenu</label>
	<textarea
	    class="form-control"
	    name="contenu"
	    placeholder="votre commentaire"
	    rows="3"
	>{if isset($valeurs)}{$valeurs[0]['contenu']} {/if}</textarea></br>
	<input type="submit" class='btn btn-default pull-right' value="Enregistrer">

	{if isset($valeurs)} <input type="hidden" name="id" value={$valeurs[0]['id']}> {/if}
</form>