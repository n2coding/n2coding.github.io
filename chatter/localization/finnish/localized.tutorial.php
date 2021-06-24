﻿<?php
// File : finnish.tutorial.php
// Translation by Jani Peltola <webmaster@melnworld.com>

// Get the names and values for vars sent by the script that called this one
if (isset($HTTP_GET_VARS))
{
	foreach($_GET as $name => $value) $$name = $value;
};
?>
<!DOCTYPE html>
<HTML>

<HEAD>
<TITLE>Suomenkielinen opastus <?php echo(APP_NAME." - ".APP_VERSION); ?></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<STYLE>
A.topLink
{
	text-decoration: underline;
	color: #0000C0;
}

A.topLink:hover, A.topLink:active
{
	color: #FF9900;
	text-decoration: none;
	font-weight: 800;
}

.redText
{
	font-weight: 800;
	color: #FF0000;
}
</STYLE>
</HEAD>

<BODY BGCOLOR="#CCCCFF">

<P><A NAME="top"></P>
<TABLE BORDER="5" CELLPADDING="5">
<TR>
	<TD><FONT SIZE="+2">Tämän oppaan sisältö</FONT></TD>
</TR>
</TABLE><BR>

<P CLASS='redText'>
VAROITUS!: Netscapen käyttäjien on määriteltävä selaimen kieli oletukseksi tai muuten kaikki viestien merkit korvautuvat kysymysmerkillä '?'.<BR>
Tämä voidaan tehdä seuraavasti: View/CharacterSet/your language Auto-Detect, sitten View/CharacterSet/SetDefault.
</P>

<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<A HREF="#language" CLASS="topLink">Kielen valinta</A><BR>
	<?php
}
?>
<A HREF="#login" CLASS="topLink">Chattiin sisäänkirjautuminen</A><BR>
<A HREF="#register" CLASS="topLink">Rekisteröityminen</A><BR>
<A HREF="#modProfile" CLASS="topLink">Profiilin muokkaaminen<?php if (C_SHOW_DEL_PROF == "1") echo("/poistaminen"); ?> Profiilin</A><BR>
<?php
if (C_VERSION == "2") 
{
	?>
	<A HREF="#create_room" CLASS="topLink">Huoneen luonti</A><BR>
	<?php
};
if ($Ver == "H") 
{
	?>
	<A HREF="#connection_state" CLASS="topLink">Yhteyden tila</A><BR>
	<?php
};
?>
<A HREF="#sending" CLASS="topLink">Viestin lähetys</A><BR>
<A HREF="#users_list" CLASS="topLink">Käyttäjälista</A><BR>
<A HREF="#exit" CLASS="topLink">Chatista poistuminen</A><BR>
<A HREF="#users_popup" CLASS="topLink">Tämänhetkisten käyttäjien selvittäminen ilman sisäänkirjautumista</A><BR>
<P>
<A HREF="#customize" CLASS="topLink">Chat-näkymän muokkaaminen</A><BR>
<P>
<A HREF="#commands" CLASS="topLink">Piirteet ja käskyt:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#help" CLASS="topLink">Help käsky</A><BR>
<?php
if (C_USE_SMILIES == "1")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#smilies" CLASS="topLink">Graafiset hymiöt</A><BR>
	<?php
};
if (C_HTML_TAGS_KEEP != "none")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#text" CLASS="topLink">Tekstin muokkaaminen</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#invite" CLASS="topLink">Käyttäjän kutsuminen nykyiseen huoneeseesi</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#changeroom" CLASS="topLink">Huoneesta toiseen vaihtaminen</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#private" CLASS="topLink">Yksityisviestit</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#actions" CLASS="topLink">Actions</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#ignore" CLASS="topLink">Toisten käyttäjien huomiotta jättäminen</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#whois" CLASS="topLink">Toisten käyttäjien julkiset tiedot</A><BR>
<?php
if (C_SAVE != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#save" CLASS="topLink">Viestien tallennus</A><BR>
	<?php
};
?>
<P>
<A HREF="#moderator" CLASS="topLink">Erikois-käskyt valvojille ja/tai ylläpitäjälle:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#announce" CLASS="topLink">Ilmoituksen lähetys</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#kick" CLASS="topLink">Käyttäjän poisto</A><BR>
<?php
if (C_BANISH != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#banish" CLASS="topLink">Käyttäjän karkoitus</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#promote" CLASS="topLink">Käyttäjän ylennys valvojaksi</A><BR>
<P>
<HR>
<HR>


<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="language"><B>Kielen valinta:</B></A></FONT>
	<P>
	Voit valita haluamasi kielen <?php echo(APP_NAME); ?> käännetyn kielen klikkaamalla lippua aloitussivulla. Esimerkissämme alapuolella, käyttäjä valitsee kielekseen ranskan:
	<P ALIGN="center">
	<IMG SRC="images/tutorials/flags.gif" HEIGHT="44" WIDTH="424" ALT="Liput kielen valintaan">
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<HR>
	<?php
}
?>

<P>
<FONT SIZE="+1"><A NAME="login"><B>Sisään kirjautuminen:</B></A></FONT>
<P>
Jos olet jo rekisteröitynyt, kirjaudu sisään chattiin yksinkertaisesti kirjoittamalla käyttäjänimesi ja salasanasi. Tämän jälkeen valitset haluamasi huoneen valikosta ja painat 'Astu sisään' nappia.<BR>
<?php
if (C_REQUIRE_REGISTER == "1")
{
	?>
	<P>
	Muussa tapauksessa sinun täytyy <A HREF="#register">rekisteröityä</A> ensin.
	<?php
}
else
{
	?>
	<P>
	Voit <A HREF="#register">rekisteröityä</A> ensin tai yksinketaisesti astua sisään huoneeseen, mutta tässä tapauksessa käyttäjätunnustasi ei varata (joku muu voi ottaa käyttäjätunnuksesi käyttöönsä, kun olet poistunut chatista).
	<?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="register"><B>Rekisteröityminen:</B></A></FONT> 
<P>
Jos et ole vielä rekisteröitynyt<?php if (C_REQUIRE_REGISTER == "0") echo("ja haluaisit rekisteröityä"); ?>, valitse 'rekisteröityminen' vaihtoehto, jonka jälkeen ilmestyy pieni popup-ikkuna.
<P>	
<UL>
	<LI>Ensimmäiseksi, luo itsellesi käyttäjänimi<?php if (!C_EMAIL_PASWD) echo(" ja salasana"); ?> kirjoittamalla ne asianmukaisiin kohtiin. Käyttäjänimesi on nimi, joka näytetään automaattisesti chat-huoneessa. Se ei voi sisältää välejä, pilkkuja tai kenoviivoja (\).
<?php if (C_NO_SWEAR == "1") echo(" Se ei voi myöskään sisältää \"rumia sanoja\"."); ?>
	<LI>Seuraavaksi, kirjoita etunimesi, sukunimesi ja e-mail osoitteesi. Voidaksesi rekisteröityä, kaikki nämä kohdat on täytettävä. Sukupuoli on valinnainen. 
	<LI>Jos sinulla on kotisivut, voit kirjoittaa osoitteen sille varattuun kohtaan.
	<LI>Kielet kenttä voi helpottaa muita käyttäjiä tulevissa keskusteluissa. He pystyvät tarkistamaan mitä kieltä ymmärrät.
	<LI>Viimeiseksi, jos haluat e-mail osoitteesi julkiseksi muille käyttäjille, ruksaa ruutu "Näytä e-mail julkisesti". Jos haluat etteivät muut näe e-mil osoitettasi, jätä ruutu ruksaamatta.
	<LI>Sitten, 'Rekisteröidy' nappia ja käyttäjätunnuksesi luodaan. Jos haluat lopettaa rekisteröitymisen kesken, paina 'Sulje' nappia.
</UL>
<P>
<A NAME="modProfile"></A>Tietenkin rekisteröityneet käyttäjät voivat muokata<?php if (C_SHOW_DEL_PROF == "1") echo("/poistaa"); ?> omaa profiiliaan klikkaamalla asianmukaista <?php echo((C_SHOW_DEL_PROF == "0" ? "linkkiä" : "links")); ?>.<BR>
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<?php
if (C_VERSION == "2") 
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="create_room"><B>Huoneen luonti:</B></A></FONT> 
	<P>
	Rekisteröityneet käyttäjät voivat luoda huoneita. Yksityisiin huoneisiin voivat astua sisään ainoastaan käyttäjät, jotka tietävät huoneen nimen. Nimi näytetään ainoastaan huoneesa sisällä oleville keskustelijoille.<BR>
	<P>
	Huoneen nimi ei voi sisältää pilkkua tai kenoviivaa (\).<?php if (C_NO_SWEAR == "1") echo(" Se ei voi myöskään sisältää \"rumia sanoja\"."); ?>
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
	<HR>
	<?php
};
if ($Ver == "H")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="connection_state"><B>Yhteyden tila:</B></A></FONT> 
	<P>
	Yhteytesi tilan osoittava kuva sijaitsee kuvaruudun oikeassa yläkulmassa. Sillä on kolme mahdollista muotoa :
	<P>	
	<UL>
		<LI><IMG SRC="images/connectOff.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="No connection"> Kun yhteyttä ei tarvita ;
		<LI><IMG SRC="images/connectOn.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Connecting"> Kun yhteys on päällä ;
		<LI><IMG SRC="images/connectError.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Connection failed"> Kun yhteys on epäonnistunut.
	</UL>
	<P>
	Kolmannessa tapauksessa punaisen "napin" klikkaaminen laukaisee uuden yhteyden muodostamis yrityksen.
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="sending"><B>Viestin lähetys:</B></A></FONT> 
<P>
Lähettääksesi viestin chat huoneessa, kirjoita viestisi vasemmassa alakulmassa sijaitsevaan teksti-kenttää ja paina Enteriä. Kaikkien käyttäjien lähettämät viestit näkyvät chat-ikkunassa.<BR>
<?php if (C_NO_SWEAR == "1") echo("Huomaa että \"rumia sanoja\" ei näytetä viesteissä."); ?>
<P>
Voit vaihtaa tekstin värin valitsemalla uuden värin tekstikentän oikealla puolella olevasta valikosta.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="users_list"><B>Käyttäjälista (ei popup-ikkuna):</B></A></FONT> 
<P>
<OL>
	Käyttäjälistalle on määritetty kaksi perus-sääntöä:<BR>
	<!-- To update
	<LI>Pieni kuva (<IMG SRC="images/whoisOff.gif" WIDTH=5 HEIGHT=9 BORDER=0 ALT="kuka? kuvake">) näytetään kaikkien rekisteröityjen käyttäjien nimen edessä ja sen klikkaaminen laukaisee <A HREF="#whois">kuka? popup-ikkunan</A> kyseisestä käyttäjästä. Rekisteröitymättömien käyttäjien nimen edessä on ainoastaan miinus-merkki.;<BR>
	-->
	<LI>a little icon that shows gender is displayed before the nick of a registered user (clicking on it will launch the <A HREF="#whois">whois popup</A> for this user), while unregistered users have nothing but blank spaces displayed before their nick;<BR>
	<LI>Ylläpitäjän tai valvojan nimi on kursivoitu.
</OL>
<P><I>Esimerkki</I>, Allaolevasta kuvasta saat selville seuraavat asiat:
<TABLE BORDER=0 CELLSPACING=10>
<TR>
	<TD>
		<IMG SRC="images/tutorials/usersList.gif" WIDTH=128 HEIGHT=145 BORDER=0 ALT="käyttäjälista">
	</TD>
	<TD>
	<UL>
		<LI>Nicolas on ylläpitäjä tai yksi huoneen valvojista;<BR><BR>
		<!-- To update
		<LI>Lolo and Jezek2 ovat rekisteröityneitä käyttäjiä ilman erityisoikeuksia;<BR>
		<LI>Mary on vain rekisteröitymätön käyttäjä.
		-->
		<LI>alien (whose gender is unknown), Jezek2 and Caridad are registered users with no extra "power" for the phpMyChat room;<BR><BR>
		<LI>lolo is a simple unregistered user.
	</UL>
	</TD>
</TR>
</TABLE>
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="exit"><B>Chatista poistuminen:</B></A></FONT>
<P>
Postuaksesi, klikkaa kerran "Poistu" linkkiä. Vaihtoehtoisesti voit myös kirjoittaa yhden seuraavista käskyistä tekstikenttään:<BR>
/exit<BR>
/bye<BR>
/quit
Näitä käskyjä voidaan vielä täydentää viestillä, joka näytetään poistuessasi chatista.
<I>Esimerkki :</I> /quit Nähdään pian!
<P>
Lähettää viestin "Nähdään pian!" poistuessasi.

<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="users_popup"><B>Tämänhetkisten käyttäjien selvittäminen ilman sisäänkirjautumista:</B></A></FONT> 
<P>
Voit klikata käyttäjien lukumäärän näyttävää linkkiä aloitussivulla tai jos olet jo keskustelemassa, klikkaa <IMG SRC="images/popup.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Users popup"> kuvaa ruudun oikeassa yläkulmassa avataksesi ikkunan, joka näyttää tämänhetkisten käyttäjien luettelon, sekä huoneet joissa he ovat.<BR>
Tämän ikkunan otsikko sisältää käyttäjien nimet, jos niitä on alle kolme, mutta muutoin käyttäjien lukumäärän ja heidän huoneensa.
<P>
Klikkaamalla <IMG SRC="images/sound.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Merkkiääni"> kuvaa tämän ikkunan yläosassa, voit asettaa/poistaa merkkiäänen, joka piippaa uuden käyttäjän saapuessa huoneeseen.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>
<HR>


<P>
<FONT SIZE="+1"><A NAME="customize"><B>Chat-näkymän muokkaaminen:</B></A></FONT>
<P>
On olemassa monia erilaisia tapoja chat-näkymän muokkaamiseen. Muuttaaksesi asetuksia, yksinkertaisesti vain kirjoitat haluamasi käskyn tekstikenttään ja painat Enter:iä.
<P>
<UL>
	<?php
	if ($Ver == "H")
	{
		?>
		<LI><B>Clear käskyllä</B> voit tyhjentää chat-näkymän ja näyttää vain 5 viimeisintä viestiä.<BR>Kirjoita "/clear" ilman lainausmerkkejä.
		<P>
		<?php
	}
	else
	{
		?>
		<LI><B>Order käskyllä</B> voit määrittää ilmestyvätkö uudet viestit ruudun ylä- vai alareunaan.<BR>Kirjoita "/order" ilman lainausmerkkejä.
		<P>
		<?php
	};
	?>
	<LI><B>Notify käskyllä</B> voit poistaa tai laittaa päälle vaihtoehdon, joka ilmoittaa kävijän saapumisesta tai pooistumisesta. Tämän vaihtoehdon oletusarvo on <?php echo(C_NOTIFY ? "Päällä" : "Pois päältä"); ?> ja huomautukset <?php echo(C_NOTIFY ? "näkyvät" : "eivät näy"); ?>.<BR>Kirjoita "/notify" ilman lainausmerkkejä.
	<P>
	<LI><B>Timestamp käskyllä</B> voit joko näyttää tai poistaa viestin lähetysajan viestien alusta sekä myös serverin ajan alapalkista. Oletusarvo on <?php echo(C_SHOW_TIMESTAMP ? "päällä" : "ei päällä"); ?>.<BR>Kirjoita "/timestamp" ilman lainausmerkkejä.
	<P>
	<LI><B>Refresh käskyllä</B> voit muuttaa viestikentän päivitystiheyttä. Tämän hetken oletusarvo on <?php echo(C_MSG_REFRESH); ?> sekuntia. Muuttaaksesi arvoa, kirjoita "/refresh n" ilman lainausmerkkejä. n on päivitystyiheys sekunneissa.
	<P>
	<I>Esimerkki:</I> /refresh 5
	<P>
	Muuttaa päivitystiheyden 5 sekuntiin. *Huomaa!, jos n asetetaan alle kolmeksi (3) päivitys nollautuu eikä päivitystä tapahdu ollenkaan. (käytännöllinen silloin kun haluat lukea paljon vanhoja viestejä ilman häiriötä)!*
	<P>
	<?php
	if ($Ver == "L")
	{
		?>
		<LI><B>Show käskyllä</B> voit valita ruudullasi kerrallaan näkyvien viestien määrän. Muuttaaksesi oletusarvoa, kirjoita "/show n" ilman lainausmerkkejä. n on näytettävien viestien lukumäärä.
		<P>
		<I>Esimerkki:</I> /show 50
		<P>
		Näyttää 50 uusinta viestiä ruudullasi. Jos kaikki viestit eivät mahdu ruudulle, viestikehyksen oikeaan reunaan ilmestyy vierityspalkki.</UL>
		<?php
	}
	else
	{
		?>
		<LI><B>Show ja Last käskyillä</B> voit tyhjentää ruudun ja näyttää viimeiset <I>n</I> viestiä. Kirjoita "/show n" tai "/last n" ilman lainausmerkkejä. n on näytettävien viestien lukumäärä.
		<P>
		<I>Esimerkki:</I> /show 50 tai /last 50
		<P>
		Tyhjentää viestikehyksen ja näyttää 50 uusinta viestiä. Jos kaikki viestit eivät mahdu kerralla kehykseen, oikeaan reunaan ilmestyy vierityspalkki.</UL>
		<?php
	};
	?>
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
</UL>
<HR>
<HR>


<P>
<FONT SIZE="+2"><A NAME="commands"><B><U>Piirteet ja käskyt</U></B></A></FONT> 
<P>

<FONT SIZE="+1"><A NAME="help"><B>Help käsky:</B></A></FONT>
<P>
Ollessasi huoneessa sisällä saat ohjetiedoston esille klikkaamalla <IMG SRC="images/helpOff.gif" WIDTH=15 HEIGHT=15 BORDER=0 ALT="?"> kuvaa tekstikentän vasemmalla puolella. Voit myös kirjoittaa <B>"/help" tai "/?" käskyt</B> viestikenttään.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<P>
<HR>

<?php
if (C_USE_SMILIES == "1")
{
	include("./lib/smilies.lib.php");
	$Nb = count($SmiliesTbl);
	$ResultTbl = Array();
	DisplaySmilies($ResultTbl,$SmiliesTbl,$Nb,"tutorial");
	unset($SmiliesTbl);
	?>
	<FONT SIZE="+1"><A NAME="smilies"><B>Hymiöt:</B></A></FONT>
	<P>Voit sisällyttää viesteihisi pieniä graafisia hymiöitä. Katso alapuolelta kunkin hymiön esittämiseen tarvittavat koodit.
	<P ALIGN="center">
	<TABLE BORDER=0 CELLPADDING=3 CELLSPACING=5>
	<?php
	$i = "0";
	$Nb = count($ResultTbl);
	while($i < $Nb)
	{
		if ($i > 0) echo("\t");
		echo("<TR VALIGN=\"BOTTOM\">\n");
		echo("$ResultTbl[$i]");
		echo("\t</TR>\n\t<TR>\n");
		$i++;
		echo("$ResultTbl[$i]");
		echo("\t</TR>\n");
		$i++;
	};
	unset($ResultTbl);
	?>
	</TABLE>
	<P>
	<I>Esimerkiksi</I>, tekstin "Hei Jani :)" lähettäminen ilman lainausmerkkejä tuottaa seuraavanlaisen viestin: Hei Jani <IMG SRC="images/smilies/smile1.gif" WIDTH=15 HEIGHT=15 ALT=":)">.
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
	<HR>
	<?php
};

if (C_HTML_TAGS_KEEP != "none")
{
	?>
	<FONT SIZE="+1"><A NAME="text"><B>Tekstin muokkaus:</B></A></FONT>
	<P>
	Tekstiä voidaan lihavoida, kursivoida tai alleviivata sulkemalla haluttu teksti seuraavien HTML tagien sisään: &LT;B&GT; &LT;/B&GT, &LT;I&GT; &LT;/I&GT; tai &LT;U&GT; &LT;/U&GT .
	<P>
	<I>Esimerkiksi</I>, &LT;B&GT;Tämä teksti&LT;/B&GT; tuottaa <B>Tämä teksti</B>.
	<P>
	Luodaksesi hyperlinkin e-mail tai URL osoitteesta, kirjoita koko osoite ilman HTML tageja. Hyperlinkki luodaan automaattisesti.
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="invite"><B>Käyttäjän kutsuminen nykyiseen huoneeseesi:</B></A></FONT>
<P>
Voit käyttää <B>invite käskyä</B> käyttäjän kutsumiseen samaan huoneeseen, jossa sinä olet.
<P>
<I>Esimerkiksi:</I> /invite Jani
<P>
Lähettää Janille yksityisen viestin ja pyytää häntä liittymään seuraasi huoneeseen, jossa olet. Tämä viesti sisältää kohdehuoneen nimen ja nimi on lisäksi suora linkki kyseiseen huoneeseen.
<P>
Huomaa, että voit laittaa myös useamman kuin vain yhden nimen "/invite" käskyn yhteydessä. (eli "/invite Jani,Helen,Alf"). Nimet on erotettava toisistaan pilkulla (,) ilman välejä.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="changeroom"><B>Huoneen vaihtaminen:</B></A></FONT>
<P>
Ruudun oikeassa reunassa näkyy lista eri huoneista ja niiden käyttäjistä. Poistuaksesi nykyisestä huoneestasi ja siirtyäksesi johonkin muuhun huoneeseen, sinun täytyy yksinkertaisesti vain klikata haluamasi huoneen nimeä. Tyhjät huoneet eivät näy listassa. Voit siirtyä tyhjään huoneeseen kirjoittamalla käskyn <B>"/join #huoneennimi"</B> ilman lainausmerkkejä.
<P>
<I>Esimerkiksi:</I> /join #PunainenHuone 
<P>
Siirtää sinut PunaiseenHuoneeseen.
<?php
if (C_VERSION == "2")
{
	echo(C_REQUIRE_REGISTER == "0" ? "<P>Jos olet rekisteröitynyt käyttäjä, voit" : "<BR><P>Voit");
	?>
	 myös luoda uuden huoneen tällä samalla käskyllä. Mutta tässä tapauksessa sinun täytyy myös määrittää huoneen tyyppi : 0 tarkoittaa yksityistä ja 1 julkista huonetta (oletusarvo).
	<P>
	<I>Esimerkiksi:</I> /join 0 #MinunHuoneeni 
	<P>
	Luo uuden yksityisen huoneen (olettean ettei saman nimistä julkista huonetta ole luotu) nimeltää MinunHuoneeni ja siirtää sinut kyseiseen huoneeseen.
	<P>
	Huoneen nimi ei saa sisältää pilkkua tai kenoviivaa (\).<?php if (C_NO_SWEAR == "1") echo(" Se ei voi myöskään sisältää \"rumia sanoja\"."); ?>
	<?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Oman profiilin muokkaaminen sisällä chatissa:</B></FONT>
<P>
<B>Profile käsky</B> luo erillisen pop-up-ikkunan, jossa voit muokata käyttäjäprofiiliasi ja muuttaa kaikkia muita tietoja paitsi käyttäjänimeä ja salasanaa (Sinun on käytettävä aloitussivun linkkiä muuttaaksesi käyttäjänimeä ja salasanaa).<BR>Kirjoita /profile
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Viimeisen lähettämäsi viestin tai käskyn palautus:</B></FONT>
<P>
<B>! käsky</B> palauttaa viimeksi lähettämäsi käskyn tai viestin.<BR>Kirjoita /!
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Tietylle käyttäjälle vastaaminen:</B></FONT>
<P>
Klikkamalla kerran toisen käyttäjän nimeä listasta (ruudun oikeassa reunassa), heidän "käyttäjänimensä" ilmestyy tekstikenttään. Tällä toiminnolla sinun on mahdollista helposti kohdistaa julkinen viestisi tietylle käyttäjälle, mahdollisesti vastaukseksi johonkin jota hän on aikaisemin kirjoittanut.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="private"><B>Yksityiset viestit:</B></A></FONT>
<P>
Lähettääksesi yksityisviestin toiselle käyttäjälle omassa nykyisessä huoneessasi, kirjoita käsky <B>"/msg käyttäjänimi viesti" tai "/to käyttäjänimi viesti"</B> ilman lainausmerkkejä.
<P>
<I>Esimerkiksi, jos käyttäjänimi on Jani:</I> /msg Jani Moi, kuinka voit?
<P>
Viesti näkyy tällöin Janille ja sinulle itsellesi, mutta ei muille käyttäjille.
<P>
Huomaa, että viestin lähettäjän käyttäjänimen klikkaaminen chat-kehyksessä siirtää tämän käskyn automaattisesti tekstikenttään viestiä varten.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="actions"><B>Actions:</B></A></FONT>
<P>
To describe what you're doing you can use the <B>command "/me action"</B> without quotes.
<P>
<I>For example:</I> If Jack sends the message "/me is smoking a cigarette" the message frame will shown "<B>* Jack</B>" is smoking a cigarette".
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="ignore"><B>Muiden käyttäjien huomiotta jättäminen:</B></A></FONT>
<P>
Jättääksesi toisen käyttäjän lähettämät viestit huomioimatta, kirjoita käsky <B>"/ignore käyttäjänimi"</B> ilman lainausmerkkejä.
<P>
<I>Esimerkki:</I> /ignore Jani
<P>
Tästä eteenpäin et enää näe Janin lähettämiä viestejä.
<P>
Nähdäksesi listan käyttäjistä, joiden viestejä ei näytetä sinulle, kirjoita käsky <B>"/ignore"</B> ilman lainausmerkkejä. 
<P>
Poistaaksesi huomioimatta jättämisen, kirjoita käsky <B>"/ignore - käyttäjänimi"</B> ilman lainausmerkkejä. Käskyssä "-" on tavuviiva. <P> 
<P>
<I>Esimerkki:</I> /ignore - Jani 
<P>
Nyt kaikki Janin lähettämät vietit näkyvät jälleen ruudullasi, sisältäen myös Janin ennen tätä komentoa lähettämät viestit.
Jos et määritä käyttäjänimeä tavuviivan (-) jälkeen, koko "huomioimattomuus" listasi tyhjenee.
<P>
Huomaa, että voit laittaa useamman kuin yhden käyttäjänimen "/ignore" käskyn yhteydessä (eli "/ignore Jani,Helen,Alf" tai "/ignore - Jani,Alf"). Nimet on erotettava pilkulla (,) ilman välejä.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="whois"><B>Toisten käyttäjien julkiset tiedot:</B></A></FONT>
<P>
Nähdäksesi toisten käyttäjien julkiset tiedot, kirjoita käsky <B>"/whois käyttäjänimi"</B> ilman lainausmerkkejä.
<P>
<I>Esimerkki:</I> /whois Jani
<P>
Jossa 'Jani' on käyttäjänimi. Tämä käsky luo erillisen pop-up-ikkunan, jossa näkyy käyttäjän julkiset tiedot.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<?php
if (C_SAVE != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="save"><B>Viestien tallennus:</B></A></FONT>
	<P>
	Tallentaaksesi viestit (huomautukset mukana) paikalliseen HTML tiedostoon, kirjoita käsky <B>"/save n"</B> ilman lainausmerkkejä.
	<P>
	<I>Esimerkiksi:</I> /save 5
	<P>
	Jossa '5' on tallennettavien viestien lukumäärä. Jos n ei ole määritelty, kaikki kyseisen huoneen saatavilla olevat viestit tallennetaan.
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
	<HR>
	<?php
};
?>
<HR>


<P>
<FONT SIZE="+2"><A NAME="moderator"><B><U>Käskyjä vain ylläpidolle ja/tai valvojille</U></B></A></FONT> 

<P>
<FONT SIZE="+1"><A NAME="announce"><B>Ilmoituksen lähetys:</B></A></FONT>
<P>
Ylläpitäjä voi lähettää ilmoituksen kaikille käyttäjille heidän huoneistaan riippumatta <B>announce</B> käskyllä.
<P>
<I>Esimerkiksi: /announce Chat suljetaan päivityksen vuoksi tänään klo 20:00.</I>
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="kick"><B>Käyttäjän poistaminen:</B></FONT>
<P>
Valvojat voivat poistaa käyttäjän ja ylläpitäjä voi mpoistaa käyttäjän tai valvojan <B>kick</B> käskyllä. Poistettavan käyttäjän on oltava samassa huoneessa.
<P>
<I>Esimerkiksi</I>, jos Jani olisi poistettava henkilö:</I> /kick Jani</I>
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>
<HR>

<?php
if (C_BANISH != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="banish"><B>Käyttäjän karkoitus:</B></A></FONT>
	<P>
	Valvoja voi karkoittaa käyttäjän ja ylläpitäjä voi karkoittaa valvojan tai käyttäjän <B>ban</B> käskyllä.<BR>
	Ylläpitäjä voi karkoittaa käyttäjän myös muista huoneista kuin siitä jossa hän itse on. Hän voi myös karkoittaa käyttäjän ikuisiksi ajoiksi '<B>&nbsp;*&nbsp;</B>' merkillä ennen karkoitettavan käyttäjän nimeä.
	<P>
	<I>Esimerkiksi</I>, jos Jani olisi karkoitettava käyttäjä : <I>/ban Jani</I> tai <I>/ban * Jani</I>
	<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="promote"><B>Käyttäjän ylennys valvojaksi:</B></A></FONT>
<P>
Valvojat ja ylläpitäjä voivat ylentää käyttäjän valvojaksi <B>promote</B> käskyllä.
<P>
<I>Esimerkiksi</I>, jos Jani olisi ylennettävä henkilö:<I> /promote Jani</I>
<P>
Ainoastaan ylläpitäjä voi peruuttaa ylennyksen (muuttaa valvoja käyttäjäksi) sille tarkoitetulla sivulla. Toiminnalle ei ole olemassa omaa käskyä.
<BR><P ALIGN="right"><A HREF="#top">Takaisin alkuun</A></P>
<P>


</BODY>
</HTML>