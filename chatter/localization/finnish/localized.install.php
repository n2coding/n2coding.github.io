﻿<?php
// File : finnish/localized.install.php  - plus version (31.12.2016  - rev.8)
// Original translation by Mirja -Liisa Väänänen, ShadowKiro  <shadowkiro@gmail.com>
// Do not use ' but use ’ instead (utf -8 edit bug)

define("L_BTN1", "Seuraava");
define("L_BTN2", "Peruuta");
define("L_BTN3", "Takaisin");
define("L_BTN4", "Päivitä");
define("L_BTN5", "Valmis");
define("L_BTN6", "Ohita");
define("L_CONN_ERROR", "FTP palvelimen osoite väärin!<br />Palaa takaisin ja tarkista ftp osoite.");
define("L_LOGIN_ERROR", "Kirjautumisen vahvistaminen epäonnistui!<br />Palaa takaisin ja tarkista tunnus sekä salasana.");
define("L_FTP_NAME", "FTP käyttäjätunnus on tyhjä!");
define("L_FTP_PASS", "FTP salasana on tyhjä!");
define("L_DB_NOCONNECT", "Ei saatu yhteyttä datapöytään!");
define("L_DB_HINT1", "Datapöytä %s ei ole olemassa tai sitä ei voitu luoda!");
define("L_PASS_ERROR1", "Et antanut ylläpitäjälle nimeä.<br />Palaa takaisin ja valitse ylläpitotunnuksellesi nimi!");
define("L_PASS_ERROR2", "Sinun on täytettävä salasanakentät.<br />Palaa takaisin ja kirjoita salasana kahdesti!");
define("L_PASS_ERROR3", "Salasana vahvistuskentässä ei vastaa ensin antamaasi.<br />Palaa takaisin ja kirjoita salasanat uudelleen!");
define("L_FILE_ERROR1", "Tiedoston oikeuksia ei voitu muuttaa");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Kansion oikeuksia ei voitu muuttaa");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Asennusohjelma %s");
define("L_INST_VER", "Versio:");
define("L_INST_SETUP", "Asenna");
define("L_INST_PAG_OF", "Sivu %s %s sivusta");
define("L_P0_HINT1", "Tervetuloa asennusohjelmaamme %s varten.");
define("L_P0_HINT2", "Kirjoita FTP kirjautumistietosi alas.");
define("L_P1_HINT1", "Tämä ohjelma auttaa sinut läpi asennusprosessin.<br />Valitse alhaalta millaisen asennuksen haluat tehdä.");
define("L_P1_HINT2", "Valitse millainen asennus tämä on:");
define("L_P1_HINT3", "FTP -tiedot jotka annoit ovat väärin. Asennusta ei voida jatkaa. Palaa takaisin ja korjaa virheet. Tässä ne ovat:");
define("L_P2_HINT1", "Nyt kannattaa tarkistaa phpMyChatin asetukset. Ne täytyy muuttaa tiedostosta (\"config/config.lib.php\") tällä palvelimella.");
define("L_P2_HINT2", "Asetustiedosto ei ole kirjoitettava. Tehdäksesi siitä kiroitettavan, käytä mitä tahansa FTP -ohjelmaa (esim. Total Commander) ottaaksesi yhteyden serveriisi ja asettaaksesi oikeustason 666  \"config.lib.php\" tiedostolle config kansiossa). Jos et tiedä kuinka tämä tehdään, täytä alla oleva lomake ja klikkaa \"".L_BTN1."\".");
define("L_P2_HINT3", "Huomaa: Jos muutit jo luvat tiedostolle, klikkaa \"".L_BTN4."\" nappia muutokien jälkeen, näin asennusohjelma tietää että tiedosto on kirjoitettavissa!");
define("L_P2_HINT4", "Tiedosto \"config/config.lib.php\" on kirjoitettavissa. Täytä tämä lomake ja sen sisältö tallentuu automaattisesti tiedostoon.");
define("L_P3_HINT1", "Palaa takaisin edelliselle sivulle ja muuta arvot. Jos asennusohjelma ei saanut luotua datapöytää, luo se itse.");
define("L_P3_HINT2", "Tässä ovat sinun asetustietosi \"config/config.lib.php\" tiedostolle. Valitse kaikki teksti alla olevasta tekstilaatikosta, kopioi se ja liitä se johonkin hyvään tekstinkäsittelyohjelmaan (esim. Notepad++). Tallenna tiedosto nimellä config.lib.php (katsu että tyyppi on Kaikki, ei Tekstitiedosto) ja lataa tiedosto FTP serverillesi \"config\" kansioon.");
define("L_P3_HINT3", "Sitten sinun täytyy luoda ylläpidon tunnukset, päästäksesi phpMyChat  -ylläpidon hallintapaneeliin.");
define("L_P3_HINT4", "Sinun \"config/config.lib.php\"  - tiedostosi:");
define("L_P3_HINT5", "Ei voitu avata \"config/config.lib.php\" kirjoitusta varten!");
define("L_P3_HINT6", "Palaa takaisin edelliselle sivulle ja vaihda arvot. Tiedostoa ei voi muokata.");
define("L_P3_HINT7", "Nyt sinun täytyy luoda Ylläpidon tunnukset, jotta pääset phpMyChatin ylläpitopaneeliin.");
define("L_P3_HINT8", "Asetuksesi on tallennettu.");
define("L_P3_HINT9", "Huomio: Tällä tunnuksella on kaikki valta ylläpidossa ja chathuoneissa!");
define("L_P3_BTN1", "Valitse kaikki");
define("L_P4_HINT1", "Pääylläpitäjän tunnuksesi on nyt luotu.");
define("L_P4_HINT2", "Nyt voit mennä ylläpidon paneeliin ja vaihtaa phpMyChat serverisi asetuksia. Siellä on paljon muitakin hyödyllisiä asetuksia joilla hallinnoida huoneitasi, käyttäjiä, viestejä ja paljon muuta. Käytä ylläpitolinkkiä päästäksesi paneeliin million tahansa.");
define("L_P4_HINT3", "Asennus on valmis. Klikkaa \"".L_BTN5."\" päästäksesi chatin kirjautumissivulle ja lähteäksesi tästä asennusohjelmasta.");
define("L_P4_HINT4", "Asennusohjelma on muokannut automaattisesti kaikki tarvittavat tiedostot ja niiden oikeudet. Nyt asinun täytyy vain varmistaa, että \"install/install.php\" on poistettu serveriltäsi! Jos ei, poista se itse.");
define("L_P1_OP01", "Uusi asennus");
define("L_P1_OP02", "Päivitys versiosta %s");
define("L_P1_OP03", "Ei tietokantamuutoksia");
define("L_P0_FORM1", "FTP palvelimen osoite");
define("L_P0_FORM2", "FTP tunnus");
define("L_P0_FORM3", "FTP salasana");
define("L_P0_FORM4", "FTP polku (oma)");
define("L_P2_FORM01", "Tietokantapalvelin phpMyChatille");
define("L_P2_FORM02", "Tietokannan käyttäjänimi phpMyChatille");
define("L_P2_FORM03", "Tietokannan salasana phpMyChatille");
define("L_P2_FORM04", "Tietokannan nimi phpMyChatille");
define("L_P2_FORM05", "Tietokannan tyyppi");
define("L_P2_FORM06", "Taulu viesteille");
define("L_P2_FORM07", "Taulu chatin käyttäjille");
define("L_P2_FORM08", "Taulu rekisteröityneille käyttäjille");
define("L_P2_FORM09", "Taulu karkoitetuille käyttäjille");
define("L_P2_FORM10", "Taulu asetuksille");
define("L_P2_FORM11", "Taulu hiippareille");
define("L_P2_FORM12", "Nimeä ylläpidon loki kansio");
define("L_P2_FORM13", "Jos aiot käyttää phpMyChattia liitettynä osana phpNukea tai phpBB foorumia, asetuksien taulun nimen on oltava \"c_config\" ja rekisteröityjen käyttäjien taulun \"c_reg_users\"!");
define("L_P2_FORM14", "Valitse hankala nimi!");
define("L_P2_FORM15", "Chattisi nimi");
define("L_P2_FORM16", "Tilastojen taulu");
define("L_P2_FORM17", "Tietokanta Port phpMyChatille (vapaaehtoinen)"); //rev.8
define("L_P2_FORM18", "PDO-tietokantaohjain (vapaaehtoinen)"); //rev.9
define("L_P2_FORM19", "Etuliite tietokantataulukoille (vapaaehtoinen)"); //rev.10
define("L_P3_FORM1", "Ylläpitäjän tunnus");
define("L_P3_FORM2", "Ylläpitäjän salasana");
define("L_P3_FORM3", "Vahvista salasana");
define("L_P3_FORM4", "Oikea nimi sähköposteja varten");
define("L_P3_FORM5", "Sähköpostiosoite");
define("L_P3_FORM6", "Chatin osoite sähköposteja varten");
define("L_P4_FORM1", "Avaa ylläpitopaneeli");
define("L_P4_FORM2", "Vaihtoehtoisesti, voit myös asentaa botin (robotti, feikkikäyttäjä) chattiisi, se voi tuoda paljon hauskaa viihdettä huoneisiisi. Voit tehdä tämän myöhemminkin, mutta tämä on paras hetki tehdä se. Jos klikkaat linkkiä alhaalla, älä estä asennusohjelmaa asentamasta sitä uudessa pop up ikkunassa!");
define("L_P4_FORM3", "Asenna botti");
?>