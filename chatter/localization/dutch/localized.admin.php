<?php
// File : dutch/localized.admin.php - plus version (01.01.2015 - rev.18)
// Original translation by Corbesir <rock@jascrc.com>
// Updates, corrections and additions for the Plus version by DJE Amesz & Romanesko <Genieusdanny@gmail.com> and Bert Moorlag <berbia@hotmail.com>
// Fine tuning by Ciprian Murariu <ciprianmp@yahoo.com>

// extra header for charset
$Charset = "utf-8";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administratie voor %s");
define("A_MENU_1", "Geregistreerde gebruikers");
define("A_MENU_11", "Geregistreerde gebruiker");
define("A_MENU_2", "Verbannen gebruikers");
define("A_MENU_21", "Verbannen gebruiker");
define("A_MENU_3", "Opschonen");
define("A_MENU_4", "Verstuur E-mails");
define("A_MENU_5", "Configuratie");
define("A_MENU_6", "Chat extra’s");
define("A_MENU_7", "Zoeken");
define("A_MENU_8", "Verbindingen");
define("A_MENU_9", "Log archief");
define("A_MENU_1a", "Profielen");
define("A_MENU_2a", "Statistieken");
define("A_MOD_DEV", "Mod in ontwikkeling");
define("A_LOGOUT", "Uitloggen");

// Frame for registered users
define("A_SHEET1_1", "Lijst van geregistreerde gebruikers en hun rechten");
define("A_SHEET1_2", "Gebruikersnaam");
define("A_SHEET1_3", "Rechten");
define("A_SHEET1_4", "Gemodereerde kamers");
define("A_SHEET1_5", "Gemodereerde kamers worden gescheiden door komma’s (,) zonder spaties.");
define("A_SHEET1_6", "Verwijder geselecteerde namen");
define("A_SHEET1_7", "Aanpassen");
define("A_SHEET1_8", "Er zijn geen geregistreerde gebruikers behalve jezelf.");
define("A_SHEET1_9", "Verban geselecteerde namen");
define("A_SHEET1_10", "Ga nu naar de ’".A_MENU_2."’ pagina om je keuzes te bekijken.");
define("A_SHEET1_11", "Laatst online");
define("A_SHEET1_12", "Reden van de verbaning (optioneel)");
define("A_SHEET1_13", "Toegestane kamers");
define("A_SHEET1_14", "Alle Onbeperkt");
define("A_SHEET1_15", "Alle Beperkt");
define("A_SHEET1_16", "De aangegeven kamer beperking moet ook worden geactiveerd in de ’".A_MENU_5."’ pagina.");
define("A_USER", "Gebruikers");
define("A_MODER", "Moderator");
define("A_TOPMOD", "Top Moderator");
define("A_ADMIN", "Administrator");
define("A_PAGE_CNT", "Pagina %s van %s");

// Frame for banished users
define("A_SHEET2_1", "Lijst van verbannen gebruikers en betrokken kamers");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Betrokken kamer");
define("A_SHEET2_4", "Tot");
define("A_SHEET2_5", "eindeloos");
define("A_SHEET2_6", "Kamers zijn gescheiden door komma’s (,) als het minder zijn dan 4, anders het ’<B>*</B>’ teken voor verbanning van alle kamers.");
define("A_SHEET2_7", "Verwijder de ban voor gevinkte namen");
define("A_SHEET2_8", "Er zijn geen verbannen gebruikers.");
define("A_SHEET2_9", "Reden (optioneel)");

// Frame for cleaning rooms
define("A_SHEET3_1", "Lijst met alle beschikbare kamers");
define("A_SHEET3_2", "Maak een \"niet standaard\" kamer leeg zal ook de moderator verwijderen.");
define("A_SHEET3_3", "Maak geselecteerde kamer schoon");
define("A_SHEET3_4", "Er zijn geen kamer om te legen.");
define("A_SHEET3_5", "Je hebt nog geen keuze gemaakt. Selecteer a.u.b. tenminste één kamer in de lijst hier beneden.");

// Frame for sending mails
define("A_SHEET4_0", "Je hebt nog niet de admin email ingevuld in de ’".A_MENU_5."’ pagina.");
define("A_SHEET4_1", "Verstuur e-mails");
define("A_SHEET4_2", "Aan:");
define("A_SHEET4_3", "Alles selecteren");
define("A_SHEET4_4", "Onderwerp:");
define("A_SHEET4_5", "Boodschap:");
define("A_SHEET4_6", "Verzenden!");
define("A_SHEET4_7", "Alle e-mails zijn verstuurd.");
define("A_SHEET4_8", "Fout tijdens versturen van email.");
define("A_SHEET4_9", "Adressen,onderwerp of boodschap mist!");
define("A_SHEET4_10", "Voeg extra email toe,<br />gescheiden door een komma zonder spatie (,)");
define("A_SHEET4_11", "Handtekening");
define("A_SHEET4_12", "Deselecteer Alles");
define("A_SHEET4_13", "Plaats alle ontvangers in het <b>’Bcc’</b> veld");

// Frame for configuration
define("A_SHEET5_0", "Uw geïnstalleerde versie is %s");
define("A_SHEET5_1", "Er is een nieuwe versie te krijgen (%s)!");
//Chat Extras
define("A_EXTR_DSBL", "Chat Extras staat uit") ;
define("A_REFRESH_MSG", "Ververs Berichten") ;
define("A_MSG_DEL", "Verwijder") ;
define("A_POST_TIME", "Gepost op") ;
define("A_FROM_TO", "Van › Naar") ;
define("A_FROM", "Van") ;
define("A_CHTEX_ROOM", "Kamer") ;
define("A_CHTEX_MSG", "Bericht") ;

//Save chat logs
define("A_CHAT_LOGS_1", "Logs van IP Connections naar %s"); // phpMyChat (app name)
define("A_CHAT_LOGS_2", "Chat Archief staat uit");
define("A_CHAT_LOGS_3", "Open Chat IP logs pagina");
define("A_CHAT_LOGS_4", "Reset de Chat IP logs bestanden");
define("A_CHAT_LOGS_5", "Archiveren en resetten van de Chat IP logs bestanden!\\n");
define("A_CHAT_LOGS_6", "Volledige Chat Logs Archief");
define("A_CHAT_LOGS_7", "Laat gebruikers zien’ chat archief sectie");
define("A_CHAT_LOGS_8", "Dit zal alle files en mappen verwijderen\\ndie in de %s map staan!\\n"); // year
define("A_CHAT_LOGS_9", "Verwijder alle %s logs"); // year
define("A_CHAT_LOGS_10", "Verwijder Jaar");
define("A_CHAT_LOGS_11", "Dit zal alle files verwijderen\\ndie staan in de %s map!\\n"); // month/year
define("A_CHAT_LOGS_12", "(alleen de algemene)");
define("A_CHAT_LOGS_13", "Verwijder Maand");
define("A_CHAT_LOGS_14", "Dit zal alle %s file verwijderen!\\n"); // day
define("A_CHAT_LOGS_15", "Verwijder deze log");
define("A_CHAT_LOGS_16", "Lees %s log"); // day month year
define("A_CHAT_LOGS_17", "Gebruikers’ Chat Logs Archief");
define("A_CHAT_LOGS_18", "(alleen de algemene)");
define("A_CHAT_LOGS_19", "\\nHet is onomkeerbaar...\\nWeet je het zeker?");
define("A_CHAT_LOGS_20", "Laat de volledige chat archief sectie zien");
define("A_CHAT_LOGS_21", "Naar boven");
define("A_CHAT_LOGS_22", "Gearchiveerde Log File");
define("A_CHAT_LOGS_23", "Gemaakt op %s");
define("A_CHAT_LOGS_24", "Verklein alle %s log file’s in een zip bestand"); // date
define("A_CHAT_LOGS_25", "Dit zal een zip bestand maken met alle logs\\nen opgeslagen in %s map!\\n"); // month/year
define("A_CHAT_LOGS_26", "\\nWeet je het zeker?");
define("A_CHAT_LOGS_27", "Zip archieven");
define("A_CHAT_LOGS_28", "Download %s");
define("A_CHAT_LOGS_29", "Verwijder dit zip bestand");
define("A_CHAT_LOGS_30", "IP archieven");
define("A_CHAT_LOGS_31", "Totale grootte %s %s");
define("A_CHAT_LOGS_32", "Bestand");
define("A_CHAT_LOGS_33", "Map");
define("A_CHAT_LOGS_34", "%s succesvol verwijderd: %s");
define("A_CHAT_LOGS_35", "%s succes aangemaakt: %s");
define("A_CHAT_LOGS_36", "%s bestaat niet: %s");
define("A_CHAT_LOGS_37", "%s kan niet worden verwijderd: %s");
define("A_CHAT_LOGS_38", "%s kan niet worden aangemaakt: %s");
define("A_CHAT_LOGS_39", "%s tegen overschrijven beveiligd: %s");
define("A_CHAT_LOGS_40", "Fout opgetreden tijden opslaan van het bestand: %s"); // filename

//Admin Search Page
define("A_SEARCH_1", "Chatroom Zoek Pagina");
define("A_SEARCH_2", "Alle categoriën");
define("A_SEARCH_3", "Namen");
define("A_SEARCH_4", "IP Adressen");
define("A_SEARCH_5", "Permissie´s");
define("A_SEARCH_6", "E-mail");
define("A_SEARCH_7", "Geslacht");
define("A_SEARCH_8", "Omschrijving");
define("A_SEARCH_9", "Links");
define("A_SEARCH_10", "Zoeken");
define("A_SEARCH_11", "Voor Permissie Categorie, zijn de optie’s  <b>ad</b>, <b>mod</b> or <b>u</b>.");
define("A_SEARCH_12", "Voor het Geslacht Categorie, zijn de optie´s <b>0</b> voor Niet Invullen, <b>1</b> voor Man, <b>2</b> voor Vrouw, of <b>3</b> voor Stellen.");
define("A_SEARCH_13", "Gebruikersnaam");
define("A_SEARCH_14", "Voornaam");
define("A_SEARCH_15", "Achternaam");
define("A_SEARCH_16", "Land");
define("A_SEARCH_18", "Permissie");
define("A_SEARCH_19", "IP");
define("A_SEARCH_20", "Geslacht");
define("A_SEARCH_21", "Zoek Term");
define("A_SEARCH_22", "Zoeken op");
define("A_SEARCH_23", "Vul een andere zoekterm in en probeer opnieuw!");
define("A_SEARCH_24", "Geen data gevonden die voldoen aan jou criteria. Verfijn je zoekopdracht a.u.b.");
define("A_SEARCH_25", "Modereer deze gebruiker");
define("A_SEARCH_26", "Gebruiker heeft ervoor gekozen om deze informatie te verbergen in openbare profielen, voor zijn privacy. Niet openbaar maken!");
define("A_SEARCH_27", "Toon huidige maand");
define("A_SEARCH_28", "Toon alle verjaardagen");
define("A_SEARCH_29", "Er is geen verjaardag in %s"); //current month name

// Connected users Page
define("A_LURKING_1", "Ingelogde gebruikers en gluurders") ;
define("A_LURKING_2", "Gluren uitgezet.") ;

// Statistics Page
define("A_STATS_1", "Chat Statistieken Pagina");
define("A_STATS_2", "Data collectieve gestart op %s"); //date
define("A_STATS_3", "Alle statistieken (Alle Tijden)");
define("A_STATS_4", "Gedetaileerde statistieken (Laatste %s dagen van activiteit)"); //number of days
define("A_STATS_5", "Statistieken uitzetten");
define("A_STATS_6", "Top %s"); //Top 10 or Top 5
?>