<?php

/**
 * Localization
 *
 * This module contains prompts translated in Dutch.
 * All the prompts are in ISO-8859-1 encoding.
 *
 * @package Engine
 * @subpackage Localization
 * @author Gregory Van der Steen
 */

//--------------------------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system.
//  Copyright (C) 2008-2009 by Artem Rodygin
//
//  This program is free software; you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation; either version 2 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License along
//  with this program; if not, write to the Free Software Foundation, Inc.,
//  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//
//--------------------------------------------------------------------------------------------------
//  Author                  Date            Description of modifications
//--------------------------------------------------------------------------------------------------
//  Gregory Van der Steen   2008-04-03      new-693: Dutch localization.
//  Gregory Van der Steen   2008-04-30      bug-699: Views // Names of custom columns are duplicated in the list of available columns, when there are two fields of different types with the same name.
//  Gregory Van der Steen   2008-05-01      new-715: Show creation time in the list of records.
//  Gregory Van der Steen   2008-08-07      new-729: [SF2008579] Mark all records as read
//  Gregory Van der Steen   2008-11-12      new-749: Guest access for unauthorized users.
//  Gregory Van der Steen   2009-01-08      new-774: 'Anyone' system role permissions.
//  Artem Rodygin           2009-04-12      bug-806: German translation causes two ambiguous "zuruck" buttons.
//  Artem Rodygin           2009-04-26      new-817: Field permissions dialog refactoring.
//  Artem Rodygin           2009-04-26      new-818: Change buttons layout on viewing record page.
//--------------------------------------------------------------------------------------------------

$resource_dutch = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Alle vereiste velden moeten ingevuld zijn.',
    'Standaardwaarde moet in het bereik %1 tot %2 liggen.',
    'Account is uitgeschakeld.',
    'Account is vergrendeld.',
    'Ongeldige gebruikersnaam.',
    'Account met ingevoerde naam bestaat reeds.',
    'Ongeldig e-mailadres.',
    'Wachtwoorden stemmen niet overeen.',
    'Wachtwoord moet tenminste %1 tekens bevatten.',
    'Project met ingevoerde naam bestaat reeds.',
    /* 210 */
    'Groep met ingevoerde naam bestaat reeds.',
    'Sjabloon met ingevoerde naam bestaat reeds.',
    'Status met ingevoerde naam of afkorting bestaat reeds.',
    'Veld met ingevoerde naam bestaat reeds.',
    'Ongeldige getalwaarde.',
    'Getalwaarde moet in het bereik %1 tot %2 liggen.',
    'Waarde "%1" moet in het bereik %2 tot %3 liggen.',
    'Maximum waarde moet groter dan minimum waarde zijn.',
    'Het geuploade bestand overschrijdt de "upload_max_filesize" richtlijn in "php.ini".',
    'De grootte van het geuploade bestand mag niet groter dan %1 Kbytes zijn.',
    /* 220 */
    'Het geuploade bestand werd slechts gedeeltelijk geupload.',
    'Er werd geen bestand geupload.',
    'Er ontbreekt een tijdelijke map.',
    'Bijlage met ingevoerde naam bestaat reeds.',
    'Record werd niet gevonden.',
    'Filter met ingevoerde naam bestaat reeds.',
    'Ongeldige datum.',
    'Datum moet in het bereik van %1 tot %2 liggen.',
    'Ongeldige tijd.',
    'Tijd moet in het bereik van %1 tot %2 liggen.',
    /* 230 */
    'Inschrijving met ingevoerde naam bestaat reeds.',
    'Herinnering met ingevoerde naam bestaat reeds.',
    'Herinnering werd succesvol verzonden.',
    'Weergave met ingevoerde naam bestaat reeds.',
    'Kolom met ingevoerde naam bestaat reeds.',
    'Het is niet gelukt het bestand naar de harde schijf weg te schrijven.',
    'Bestandsupload is gestopt door de extensie.',
    'JavaScript moet ingeschakeld zijn.',
    'Dit is een automatisch gegenereerd bericht, gelieve dit niet te beantwoorden.',
    'Aangeduid subrecord bestaat reeds.',
    /* 240 */
    'De ingevoerde naam voor deze filterset bestaat reeds.',
    'Weergave kan niet meer dan %1 kolommen hebben.',
    'De waarde "%1" heeft een foutief formaat.',
    'Gebruiker is niet gemachtigd.',
    'Onbekende gebruikersnaam of verkeerd wachtwoord.',
    'Onbekend authenticatietype.',
    'Onbekende fout.',
    'XML parser fout.',
    'Database verbindingsfout.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Ben je zeker dat je alle geselecteerde weergaven wilt verwijderen?',
    'Ben je zeker dat je deze account wilt verwijderen?',
    'Ben je zeker dat je dit project wilt verwijderen?',
    'Ben je zeker dat je deze groep wilt verwijderen?',
    'Ben je zeker dat je dit sjabloon wilt verwijderen?',
    'Ben je zeker dat je deze status wilt verwijderen?',
    'Ben je zeker dat je dit veld wilt verwijderen?',
    'Ben je zeker dat je dit record wilt uitstellen?',
    'Ben je zeker dat je dit record wilt hervatten?',
    'Ben je zeker dat je dit record wilt toewijzen?',
    /* 310 */
    'Ben je zeker dat je alle geselecteerde filters wilt verwijderen?',
    'Ben je zeker dat je alle geselecteerde inschrijvingen wilt verwijderen?',
    'Ben je zeker dat je deze herinnering wilt versturen?',
    'Ben je zeker dat je deze herinnering wilt verwijderen?',
    'Ben je zeker dat je deze kolom wilt verwijderen?',
    'Ben je zeker dat je wilt uitloggen?',
    'Ben je zeker dat je alle geselecteerde filtersets wilt verwijderen?',
    'Ben je zeker dat je dit record wilt verwijderen?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Nederlands',
    'Inloggen',
    ' OK ',
    'Annuleren',
    'Opslaan',
    'Terug',
    'Volgende',
    'Aanmaken',
    'Wijzigen',
    'Verwijderen',
    /* 1010 */
    'Records',
    'Accounts',
    'Projecten',
    'Wijzig wachtwoord',
    'Velden met status "%1"',
    'geen',
    'Totaal:',
    'bewaar wachtwoord',
    'Account informatie',
    'Gebruikersnaam',
    /* 1020 */
    'Volledige naam',
    'E-mail',
    'Rechten',
    'beheerder',
    'gebruiker',
    'Beschrijving',
    'Wachtwoord',
    'Bevestiging',
    'uitgeschakeld',
    'geblokkeerd',
    /* 1030 */
    'Nieuwe account',
    'Account "%1"',
    'Project informatie',
    'Project naam',
    'Starttijd',
    'geschorst',
    'Nieuw project',
    'Project "%1"',
    'Groepen',
    'Groepsinformatie',
    /* 1040 */
    'Groepsnaam',
    'Nieuwe groep',
    'Groep "%1"',
    'Lidmaatschap',
    'Anderen',
    'Leden',
    'Sjablonen',
    'Sjabloonsinformatie',
    'Sjabloonsnaam',
    'Voorvoegsel',
    /* 1050 */
    'Nieuw sjabloon',
    'Sjabloon "%1"',
    'Statussen',
    'Statusinformatie',
    'Statusnaam',
    'Afkorting',
    'Statustype',
    'beginstatus',
    'tussenstatus',
    'eindstatus',
    /* 1060 */
    'Verantwoordelijkheid',
    'blijft ongewijzigd',
    'toekennen',
    'verwijderen',
    'Nieuwe status',
    'Status "%1"',
    'Tussenstatus aanmaken',
    'Eindstatus aanmaken',
    'Overgangen',
    'Permissies',
    /* 1070 */
    'Aanmaken beginstatus',
    'Toegelaten',
    'Velden',
    'Veldinformatie',
    'Sorteren',
    'Veldnaam',
    'Veldtype',
    'aantal',
    'tekst',
    'meerdere lijnentekst',
    /* 1080 */
    'Vereist',
    'ja',
    'neen',
    'Min.waarde',
    'Max.waarde',
    'Max.grootte',
    'vereist',
    'Nieuw veld (stap %1/%2)',
    'Veld "%1"',
    'alleen lezen',
    /* 1090 */
    'lezen en schrijven',
    'Algemene informatie',
    'ID',
    'Project',
    'Sjabloon',
    'Status',
    'Leeftijd',
    'Nieuw record (stap %1/%2)',
    'Record "%1"',
    'Ga',
    /* 1100 */
    'Geschiedenis',
    'Uitstellen',
    'Hervatten',
    'Toewijzen',
    'Wijzig status',
    'Tijd',
    'Eigenaar',
    'Record is aangemaakt in "%1" status.',
    'Record is toegewezen aan %1.',
    'Record is bewerkt.',
    /* 1110 */
    'Status is gewijzigd naar "%1".',
    'Record is uitgesteld tot %1.',
    'Record is hervat.',
    'Bestand "%1" is bijgevoegd.',
    'Bestand "%1" is verwijderd.',
    'toestemming om records aan te maken',
    'toestemming om records te bewerken',
    'toestemming om records uit te stellen',
    'toestemming om records te hervatten',
    'toestemming om toegewezen records opnieuw te wijzen',
    /* 1120 */
    'toestemming om de status van toegewezen records te wijzigen',
    'toestemming om bestanden bij te voegen',
    'toestemming om bestanden te verwijderen',
    'Taal',
    'Voeg reactie toe',
    'Reactie is toegevoegd.',
    'toestemming om te reageren',
    'Reactie',
    'Voeg bijlage toe',
    'Verwijder bijlage',
    /* 1130 */
    'Bijlage',
    'Bijlagenaam',
    'Bijlagebestand',
    'Bijlagen',
    'Geen velden.',
    'Kritische leeftijd',
    'Bevroren tijd',
    'Wijzigingen',
    'Oude waarde',
    'Nieuwe waarde',
    /* 1140 */
    'aankruisen',
    'record',
    'lijst',
    'Oplijsten',
    '%1 Kb',
    'Filters',
    'Filternaam',
    'Alle projecten',
    'Alle sjablonen',
    'Alle statussen',
    /* 1150 */
    'Bekijk record',
    'Toon enkel aangemaakt door ...',
    'Toon enkel toegewezen op ...',
    'toon enkel ongesloten',
    'Onderwerp',
    'Zoeken',
    'Zoekparameters',
    'Zoekresultaten (gefilterd)',
    'Zoekstring',
    'zoek op velden',
    /* 1160 */
    'zoek op reacties',
    'Status',
    'actief',
    'Inschrijvingen',
    'verwittig wanneer record is aangemaakt',
    'verwittig wanneer record is toegewezen',
    'verwittig wanneer record is gewijzigd',
    'verwittig wanneer record is bewerkt',
    'verwittig wanneer record is uitgesteld',
    'verwittig wanneer record is hervat',
    /* 1170 */
    'verwittig wanneer reactie is toegevoegd',
    'verwittig wanneer bijlage is toegevoegd',
    'verwittig wanneer bijlage is verwijderd',
    'vereist',
    'Uitgesteld',
    'Vervaldatum',
    'Standaardwaarde',
    'aan',
    'uit',
    'Statistieken',
    /* 1180 */
    'Lopende records',
    'Aangemaakt vs Gesloten',
    'week',
    'aantal',
    'Kopie',
    'Record is gekopieerd van "%1".',
    'Uitloggen',
    'verwittig wanneer een record is gekopieerd',
    'Instellingen',
    'Rijen per pagina',
    /* 1190 */
    'Bladwijzers per pagina',
    'Vergrendel',
    'Ontgrendel',
    'Groepstype',
    'globaal',
    'lokaal',
    'Configuratie',
    'Lokaal hoofdpad',
    'Web hoofdpad',
    'Beveiliging',
    /* 1200 */
    'Minimum wachtwoordlengte',
    'Maximum aantal inlogpogingen',
    'Blokkeringstijd (mins)',
    'Database',
    'Databasetype',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Database server',
    'Database naam',
    /* 1210 */
    'Database gebruiker',
    'Active Directory',
    'LDAP server',
    'Poort',
    'Zoek account',
    'Basis DN',
    'Beheerders',
    'E-mailverwittigingen',
    'Maximum grootte',
    'Debug',
    /* 1220 */
    'Debug modus',
    'ingeschakeld (zonder privédata)',
    'ingeschakeld (alle data)',
    'Debug logbestanden',
    'Ingeschakeld',
    'Uitgeschakeld',
    '%1 min',
    'toestemming om enkel records te lezen',
    'Selecteer alles',
    'Auteur',
    /* 1230 */
    'datum',
    'tijdsduur',
    'toon enkel uitgestelde',
    'Inschrijvingsnaam',
    'Gebeurtenissen',
    'Versie %1',
    'rol',
    'Inschrijven',
    'Uitschrijven',
    'Herinneringen',
    /* 1240 */
    'Herinneringsnaam',
    'Herinneringsonderwerp',
    'Herinneringsontvangers',
    'Nieuwe herinnering (stap %1/%2)',
    'Herinnering "%1"',
    'toestemming om herinneringen te sturen',
    'Verzenden',
    'Nieuwe filter',
    'Filter "%1"',
    'Nieuwe inschrijving',
    /* 1250 */
    'Inschrijving "%1"',
    'Je LDAP wachtwoord',
    'Je kan een link aan ander record toevoegen door vermelding van "rec#" en recordnummer (bijv. "rec#305").',
    'Toon enkel verplaatst naar statussen ...',
    'Delen met ...',
    'Exporteer',
    'Anderen inschrijven...',
    'Ingeschreven',
    '%1 heeft je ingeschreven voor dit record.',
    '%1 is uitgeschreven.',
    /* 1260 */
    'CC',
    'Opslag',
    'LDAP kenmerken',
    'Weergaven',
    'Weergaveinformatie',
    'Weergavenaam',
    'Nieuwe weergave (stap %1/%2)',
    'Weergave "%1"',
    'Geen weergave',
    'Instellen',
    /* 1270 */
    'Kolommen',
    'Kolominformatie',
    'Kolomtitel',
    'Nieuwe kolom',
    'Kolom "%1"',
    'Uitlijning',
    'links',
    'gecentreerd',
    'rechts',
    'Service zal onbeschikbaar zijn van %1 tot %2 (%3)',
    /* 1280 */
    'Alles aan mij toegewezen',
    'Alles door mij aangemaakt',
    'Deselecteer alles',
    'm/d/yyyy',
    'Dump',
    'Subrecords',
    'Aanmaken subrecord',
    'Vastmaken subrecord',
    'Verwijder subrecord',
    'Subrecord ID',
    /* 1290 */
    'Subrecord "%1" is toegevoegd.',
    'Subrecord "%1" is verwijderd.',
    'toestemming om subrecords toe te voegen',
    'toestemming om subrecords te verwijderen',
    'verwittig wanneer een subrecord is toegevoegd',
    'verwittig wanneer een subrecord is verwijderd',
    'aangemaakte records',
    'gesloten records',
    'Vertrouwelijk',
    'Voeg vertrouwelijke reactie toe',
    /* 1300 */
    'toestemming om vertrouwelijke reactie toe te voegen/lezen',
    'Vertrouwelijke reactie is toegevoegd.',
    'Ouder ID',
    'afhankelijkheid',
    'verborgen',
    'Voeg scheidingsteken toe',
    'CSV begrenzer',
    'CSV encodering',
    'CSV lijneindes',
    'Zoekresultaten (ongefilterd)',
    /* 1310 */
    'Inschakelen filters',
    'Uitschakelen filters',
    'Huidige filterset',
    'Bewaar filterset',
    'Filtersets',
    'Filterset naam',
    'Filterset "%1"',
    'Huidige weergave',
    'Bewaar weergave',
    'Alles uitbreiden',
    /* 1320 */
    'Alles samenvouwen',
    'Standaardwaarden herstellen',
    'L/E',
    'PCRE om veldwaarden te controleren',
    'Doorzoek PCRE om veldwaarden om te zetten',
    'Vervang PCRE om veldwaarden om te zetten',
    'Volgende standaardstatus',
    'Uigestelde status',
    'toon alles',
    'toon enkel actieve',
    /* 1330 */
    'Gebeurtenis',
    'Geen filterset',
    'Gast toegang',
    'Geen.',
    '',
    'Gast',
    'Importeer',
    'toestemming om records te verwijderen',
    'Authenticatietype',
    'Standaardtaal',
    /* 1340 */
    'Vervaldatum wachtwoord (dagen)',
    'Vervaltijd sessie (minuten)',
    'LDAP opsomming',
    'PostgreSQL',
    'lijst van getallen',
    'lijst van woorden',
    'Gemaakt',
    'Markeer als gelezen',
    'Geregistreerd',
);

?>
