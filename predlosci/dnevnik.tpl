
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Dnevnik</h2>
	<section class = "dnevnik">
		<p class = "inline-p head-p">Korisnik</p>
		<p class = "inline-p head-p">Datum</p>
		<p class = "inline-p head-p">Vrijeme</p>
		<p class = "inline-p head-p">Proizvod</p>
		{section name=i loop=$dnevnik}
			<p class = "inline-p">{$dnevnik[i].korisnik}</p>
			<p class = "inline-p">{$dnevnik[i].datum}</p>
			<p class = "inline-p">{$dnevnik[i].vrijeme}</p>
			<p class = "inline-p">{$dnevnik[i].proizvod}</p>
		{/section}
	</section>
</section>
