
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Unos proizvoda</h2>
	{if $azuriraj}
	¸<form id="form1" method="post" name="form1">
		<p>
			<label for="Naziv_proizvoda">Naziv proizvoda: </label>
			<input type="text" id="Naziv_proizvoda" name="naziv_proizvoda" size="15" maxlength="15"  placeholder="Naziv proizvoda" autofocus="autofocus" {if $azuriraj}value="{$az_proizvod.naziv}"{/if}><br>
			
			<label for="Opis_proizvoda">Opis proizvoda: </label>
			<textarea id="textarea" name="OpisProizvoda" rows="50" cols="100" maxlength="580" placeholder="Ovdje unesite opis proizvoda">{if $azuriraj}{$az_proizvod.opis}{/if}</textarea><br>
			
			<label id ="Opis_proizvoda" for="datProizvodnje">Datum Proizvodnje: </label>
			<input type="date" id="datProizvodnje" name="datProizvodnje" required="required" {if $azuriraj}value="{$az_proizvod.datum}"{/if}><br>
			
			<label for="vrijemeProizvodnje">Vrijeme proizvodnje: </label>
			<input type="time" id="vrijemeProizvodnje" name="vrijemeProizvodnje" required="required" {if $azuriraj}value="{$az_proizvod.vrijeme}"{/if}><br>
			
			<label for="Količina">Količina: </label>
			<input type="number" id="Količina" name="kolicina" placeholder="Kolicina" required="required" min="1" {if $azuriraj}value="{$az_proizvod.kolicina}"{/if}><br>
			
			<label for="Težina_proizvoda">Težina proizvoda: </label>
			<input type="range" id="Težina_proizvoda" name="tezina"  min="0" max="100" value="50" {if $azuriraj}value="{$az_proizvod.tezina}"{/if}><br>
			
			<label for="zupanija">Županija: </label>
			<select id="zupanija" name="zupanija">
				<option value="1">Gitara</option>
				<option value="2">Bubnjevi </option>
				<option value="3">Karma </option>
			</select><br>
			
			<input id="submit1" type="submit" value=" Ažuriraj " name="azuriraj">
			<input id="reset1" type="reset" value=" Inicijaliziraj ">
		</p>    
	</form>
    {/if}
	{if !$azuriraj}
		<section id="proizvod">
			<p class = "inline-p head-p">Naziv</p>
			<p class = "inline-p head-p">Opis</p>
			<p class = "inline-p head-p">Količina</p>
			<p class = "inline-p head-p">Datum</p>
			<p class = "inline-p head-p">Ažuriraj</p>
			{section name=i loop=$proizvodi}
				<p class = "inline-p">{$proizvodi[i].naziv}</p>
				<p class = "inline-p">{$proizvodi[i].opis}</p>
				<p class = "inline-p">{$proizvodi[i].kolicina}</p>
				<p class = "inline-p">{$proizvodi[i].datum}</p>
				<p class = "inline-p"><a href = "azuriraj_proizvod.php?id={$proizvodi[i].id}">Ažuriraj</a></p>
			{/section}
		</section>
	{/if}
</section>
