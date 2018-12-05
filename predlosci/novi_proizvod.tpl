
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Unos proizvoda</h2>
	¸<form id="form1" method="post" name="form1">
		<p>
			<label for="Naziv_proizvoda">Naziv proizvoda: {if $greskaNaziv!=""}<span id="usklicnik">!</span>{/if}</label>
			<input type="text" id="Naziv_proizvoda" name="naziv_proizvoda" size="15" maxlength="15"  placeholder="Naziv proizvoda" autofocus="autofocus" {if $proslo}disabled="disabled"{/if}><br>
			
			<label for="Opis_proizvoda">Opis proizvoda: </label>
			<textarea id="textarea" name="OpisProizvoda" rows="50" cols="100" maxlength="580" placeholder="Ovdje unesite opis proizvoda" {if $proslo}disabled="disabled"{/if}> {if $greskaOpis!=""}<span id="usklicnik">!</span>{/if}</textarea><br>
			
			<label id ="Opis_proizvoda" for="datProizvodnje">Datum Proizvodnje:  {if $greskaDatum!=""}<span id="usklicnik">!</span>{/if}</label>
			<input type="text" id="datProizvodnje" name="datProizvodnje"  {if $proslo}disabled="disabled"{/if}><br>
			
			<label for="vrijemeProizvodnje">Vrijeme proizvodnje:  {if $greskaVrijeme!=""}<span id="usklicnik">!</span>{/if}</label>
			<input type="time" id="vrijemeProizvodnje" name="vrijemeProizvodnje" {if $proslo}disabled="disabled"{/if}><br>
			
			<label for="Količina">Količina:  {if $greskaKolicina!=""}<span id="usklicnik">!</span>{/if}</label>
			<input type="number" id="Količina" name="kolicina" placeholder="Kolicina"  min="1" {if $proslo}disabled="disabled"{/if}><br>
			
			<label for="Težina_proizvoda">Težina proizvoda:  {if $greskaTezina!=""}<span id="usklicnik">!</span>{/if}</label>
			<input type="range" id="Težina_proizvoda" name="tezina"  min="0" max="100" value="50" {if $proslo}disabled="disabled"{/if}><br>
			
			<label for="zupanija">Županija:  </label>
			<select id="zupanija" name="zupanija" {if $proslo}disabled="disabled"{/if}>
				<option value="1" selected="selected">Gitara</option>
				<option value="2">Bubnjevi </option>
				<option value="3">Karma </option>
			</select><br>
			
			<input id="submit1" type="submit" value=" Unesi ">
			<input id="reset1" type="reset" value=" Inicijaliziraj ">
		</p>    
	</form>
</section>
