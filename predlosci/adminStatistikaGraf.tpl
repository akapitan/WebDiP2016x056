
<label > <span>Korisnik :  <span class="required">*</span></span> </label>{html_options name="moderator" id="moderator" options=$opcijeKorisnik onchange="location = this.value;" }"
{html_options name="moderator2" id="moderator2" options=$opcijeKorisnik2 selected=$prva onChange="CrtajGraf1(this);"}
<br><br>
<label > <span>Akcija :  <span class="required">*</span></span> </label>
<a href="adminStatistika.php?show=statAkcija"><button >Statistika po akcijama</button></a>
<button onclick="statAkcija()">Graf po akcijama</button>

<br><br>
<label > <span>Svi korisnici :  <span class="required">*</span></span> </label>
<a href="adminStatistika.php?show=statSviKorisnici"><button>Statistika svih korisnika</button></a>
<button onclick="statKorisnici()">Graf svih korisnika</button>

<br><br>
<button><a href="adminStatistika.php?printajPdf">Printaj</a></button>
<br><br>

<canvas id="piechart" width="400" height="400">
</canvas>
<script src="js/adminStatistikaGraf.js"></script>


