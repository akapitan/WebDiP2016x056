<section class="sadrzaj"> 
	<h5 style="visibility:hidden">samo za validaciju</h5>
	{$greska}
	<form id="form1" method="post" name="form1">
		<p>
			<label for="korime" class="label">Korisničko ime: </label>
			<input type="text" id="korime" name="korime" size="15" maxlength="15" placeholder="korisničko ime" autofocus="autofocus" class="input"><br>
			<label for="lozinka" class="label">Lozinka: </label>
			<input type="password" id="lozinka" name="lozinka" size="15" maxlength="15" placeholder="lozinka" class="input"><br>
                        <label for="kod" class="label">Jedinstveni kod: </label>
                        <input type="text" id="kod" name="kod" placeholder="kod"  class="input" >
			<input type="checkbox" name="zapamti_me" value="1" > Upamti korisničko ime<br>
			<input type="submit" value=" Prijavi se ">
			<input type="reset" value=" Inicijaliziraj " > 
		</p>
                
                <p>
                    <a href="./nova_lozinka.php">Zaboravljena lozinka?</a>
                </p>
                
		<p>Admin: akapitan</p>
		<p>ADmin1</p><br>
		<p>Moderator: Moderator</p>
		<p>MOderator1</p><br>
		<p>Obicni: Korisnik</p>
		<p>KOrisnik</p><br>
		
	</form>
   
</section>
