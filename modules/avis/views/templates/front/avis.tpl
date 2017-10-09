{extends file='page.tpl'}
{block name='page_content_container'}

<h3>Votre avis compte</h3>
<h6>En voici un exemple au hasard :</h6>

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

{/block}