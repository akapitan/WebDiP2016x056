<?php /* Smarty version Smarty-3.1.18, created on 2018-02-12 23:26:41
         compiled from "predlosci\dokumentacija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7062598095a81cce184e6c6-49271576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6f76950c4d9d39fa4bc5e0e10b7bc9bedd8c21' => 
    array (
      0 => 'predlosci\\dokumentacija.tpl',
      1 => 1518474401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7062598095a81cce184e6c6-49271576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a81cce1894334_48184408',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a81cce1894334_48184408')) {function content_5a81cce1894334_48184408($_smarty_tpl) {?><h2>Projektni zadatak</h2>
                     
                    
                <section>
                    <h2>Opis projektnog rješenja</h2>
                    <p>
                        
                    </p>
                </section>
                <section>
                    <h2>Navigacijski dijagram</h2>
                    <a href="uploads/navigacijski.png">
                        <img class="dijagram" src="uploads/navigacijski.png" alt="navigacijski" width="200" height="200">
                    </a>
                    <p></p>
                </section>
                <section>
                    <h2>Shema baze podataka</h2>
                    <a href="uploads/ERA.png">
                        <img class="dijagram" src="uploads/ERA.png" alt="era" width="200" height="200">
                    </a>
                    <p></p>
                </section>
                <section>
                    <h2>Popis i opis skripata</h2>
                    <ul>
                        <li>
                            css
                            <ul>
                                <li>akapitan.css - Glavni css u kojem se nalaze svi opisi pravila za prikaz stranice u svim medijskim veličinama</li>
                                <li>css2.txt - Css skripta za pojedine stranice kojima se glavni css nije mogao postaviti. </li>

                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li>js
                            <ul>
                                <li>akapitan.js - Javascrit skripte kojima se kod registracije vrše provjere na korisničkoj strani te pomoću ajax-a provjerava je li korisničko ime ili email zauzet. </li>
                                <li>tablicaUpdate.js - Javascript skripte kojima se pomoću JQuery-a može kliknuti na pojedini element tablice i preko ajaxa postaviti upit da se tablica ažurira novom postavljeom vrijednošću. </li>
                                <li>adminStatistikaGraf.js - Javascript funkcije za crtanje grafova klikom na gumb.</li>
                                
                            </ul>   
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li>.htaccess - skripta za autorizaciju pristupa mapi</li>
                        <li>korisnici.php - skripta za ispis korisnika</li>
                    </ul>
                    <hr>
                    <ul>

                        <li>ServerCheck.php - Skripta koje se pozivaju ajaxom i vraćaju odgovor.</li>
                        <li>adminCRUD.php - Skripta kojom pregledavamo sve tablice i omogućuje nam da dinamički mjenjamo sadržaj. </li>
                        <li>adminDnevnik.php - Skripta za pregled svih podataka u tablici "dnevnik" </li>
                        <li>adminDodajModeratora - Skripta za dodavanje moderatora k nekoj kategoriji </li>
                        <li>adminKreirajKupon - Skripta za kreiranje kupona. Pristup ima samo admin. </li>
                        <li>adminNovaVelicinaLetaka.php - Skripta za kreiranje nove veličine letka. Pristup ima samo admin. </li>
                        <li>adminOtljučavanjeKorisnika.php - Skripta za pregled svih korisnika, mjenjanje njegovog statusa i uloge. Pristup ima samo admin. </li>
                        <li>adminPDF.php - Skripta za pripremanje PDF datoteke i preuzimanje iste. Pristup ima samo admin. </li>
                        <li>adminStatistika.php - Skripta za prikaz svih korisničkih bodova i prikaz bodova u različitim grafovima. Pristup ima samo admin. </li>
                        <li>adminVirtualnoVrijeme.php - Skripta za korištenje virtualnog vremena. Pristup ima samo admin. </li>
                        <li>ajax.php - Skripta kojom vraćamo podatke u JSON obliku ajax-ovoj funkciji.</li>
                        <li>aktivacija.php - Skripta za aktiviranje korisničkog računa.</li>
                        <li>baza.class.php - Klasa baza s kojom manipuliramo podatke u bazi podataka. Neke od funkcija su SelectDB, UpdateDB, SpojiDB... Uz to koriste se još i funkcije za upis bodova i za upis u dnevnik.</li>
                        <li>index.php - Početna skripta u kojoj se prikazuju 3 naprodavanije kategorije u kojima neprijavljeni korisnik može pogledati 3 naprodavanija letka u nekoj od ponuđenih kategorija. </li>
                        <li>index_signed.php - Skripta u kojoj korisnik pristupa prilikom uspješne prijave. Ako korisnik ima ulogu običnog korisnika, tada vidim samo letke koji su aktivni, no ako korisnik ima višu ulogu tada vidi i letke koji nisu aktivni. Klikom na jedan od letka dolazi do opcije da naruči letak.</li>
                        <li>izmjena.php - Skripta koja dohvača xml objekt i sprema pomak sati u tablicu pomak.</li>
                        <li>kategorijaIndex.php - Skripta kojom se klikom na kategoriju na index.php stranici prikazuju 3 najprodavaniji letci iz te kategorije. </li>
                        <li>korisnikBodovi.php - Skripta kojom korisnik može vidjeti kojom akciom je dobio podova i vidi ukupni broj bodova. </li>
                        <li>korisnikKuponi.php - Skripta u kojoj korisnik vidi aktivne kupone i stavlja ih u košaricu. Kada je zadovoljan može potrošiti bodove i kupiti kupone. Ispod vidi sve kupljene kupone s aktivnim kodom.</li>
                        <li>letci.php - Skripta u kojoj korisnik može naručivati letke s unosom količine i opisa. Ispod vidi sve njegove naručene kupone koji su još u izradi. </li>
                        <li>moderatorDefinirajKupon.php - Skripta u kojoj moderator uzima jedan od kupona i definira njegove podatke kao što su datum do kad će kupon biti aktivan, kolika mu je cijena, i ostalo. </li>
                        <li>moderatorDodajLetak.php - Skripta u kojoj moderator dodaje letak u kategoriji nad kojom je moderator. </li>

                        <li>moderatorProvjeriKupn.php - Skripta u kojoj moderator unosi kupon i vidi podatke kupona ako je pronađen. </li>
                        <li>nova_lozinka.php - </li>
                        <li>oAutoru.php - Podaci u autoru</li>
                        <li>odjava.php - skripta za odjavu korisnika. </li>
                        <li>prijava.php - skripta za prijavu korisnika</li>
                        <li>registracija.php - skripta za registraciju korisnika</li>
                        <li>rezervacija.php - skripta za rezervaciju letaka</li>
                        <li>smarty.php - skripta kojom prosljeđujemo smarty varijable u html kod te postavljamo putanju do predloška, predloška kompresirano i ostale. </li>
                        <li>tablicaUpdate.php - skripta kojom mjenjamo podatke u tablici. </li>
                        <li>virtualnoVrijeme.php - skripta za promjenu virtualnog vremena. </li>
                        
                </section>
                <section>
                    <h2>Opis korištenih tehnologija</h2>
                    <p></p>
                </section>
                <section>
                    <h2>Popis i opis vanjskih biblioteka</h2>
                    <p>
                       Chart.js - Biblioteka za crtanje raznih grafova. Korišten za vizualni prikaz statistike kod administratora.
                       Fpdf.php - Biblioteka za generiranje pdf dokumenta. Korišten za skidanje dokumenta s statiskikom korisnika. 
                       Smarty.php - 
                    </p>
                </section>
                <section>
                    <h2>Procjena završenosti projekta</h2>
                    <p>
                       Glavna funkcionalnost napravljena u kompletu s svim funkcijama opisanim u zadatku. Svaka uloga je definirana i ima fvoju funkciju. 
                        - Nije napravljeno straničenje po kojim bi korisnik mogao prelaziti.
                        - Nije napravljeno da moderator može definirati izgled kupona u kojima je moderator.
                        - Nije napravljeno da administrator postavlja konfiguraciju sustava.
                    </p>
                </section>
                <section>
                    <h2>Popis bugova i grešaka</h2>
                    <p>
                        - s košarice se može naručiti kupon koji već imamo tako da oduzima bodove, a nije evidentiran kupon po drugi puta.
                    </p>
                </section>

      
<?php }} ?>
