<?php

/**
 * Localization
 *
 * This module contains prompts translated in Czech.
 * All the prompts are in ISO-8859-2 encoding.
 *
 * @package Engine
 * @subpackage Localization
 * @author Vit Popelka
 */

//--------------------------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system.
//  Copyright (C) 2010 by Artem Rodygin
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
//  Vit Popelka             2010-07-14      new-948: Czech localization.
//--------------------------------------------------------------------------------------------------

$resource_czech = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'V�echna pole ozna�en� jako povinn� mus� b�t vypln�na.',
    'V�choz� hodnota mus� b�t v rozmez� %1 a� %2.',
    '��et je zablokov�n.',
    '��et je uzam�en.',
    'Neplatn� u�ivatelsk� jm�no.',
    '��et se zadan�m u�ivatelsk�m jm�nem ji� existuje.',
    'Neplatn� e-mail.',
    'Hesla se neshoduj�.',
    'Heslo mus� b�t dlouh� alespo� %1 znak�.',
    'Projekt se zadan�m n�zvem ji� existuje.',
    /* 210 */
    'Skupina se zadan�m jm�nem ji� existuje.',
    '�ablona se zadan�m jm�nem nebo p�edponou ji� existuje.',
    'Stav se zadan�m jm�nem nebo zkratkou ji� existuje.',
    'Pole se zadan�m jm�nem ji� existuje.',
    'Neplatn� ��slo.',
    '��slo mus� b�t v rozmez� %1 a� %2.',
    'Hodnota "%1" mus� b�t v rozmez� %2 a� %3.',
    'Maxim�ln� hodnota mus� b�t v�t�� ne� minim�ln�.',
    'Velikost souboru je v�t�� ne� velikost povolen� parametrem "upload_max_filesize" v souboru "php.ini".',
    'Velikost souboru nesm� b�t v�t�� ne� %1 kB.',
    /* 220 */
    'Soubor byl nahr�n jen ��ste�n�.',
    '��dn� soubor nebyl nahr�n.',
    'Chyb� do�asn� slo�ka.',
    'P��loha se zadan�m jm�nem ji� existuje.',
    'Z�znam nenalezen.',
    'Filtr se zadan�m jm�nem ji� existuje.',
    'Neplatn� datum.',
    'Datum mus� b�t v rozmez� %1 a� %2.',
    'Neplatn� �as.',
    '�as mus� b�t v rozmez� %1 a� %2.',
    /* 230 */
    'P�edplatn� se zadan�m jm�nem ji� existuje.',
    'Upom�nka se zadan�m jm�nem ji� existuje.',
    'P�ipomenut� �sp�n� odesl�no.',
    'Pohled se zadan�m jm�nem ji� existuje.',
    'Sloupec se zadan�m jm�nem ji� existuje.',
    'Nepoda�ilo se zapsat soubor na disk.',
    'Nahr�n� souboru zastaveno roz���en�m.',
    'Mus� b�t povolena podpora JavaScriptu.',
    'To je automaticky generovan� zpr�va, pros�m, neodpov�dejte na ni.',
    'Po�adovan� pod��zen� z�znam ji� existuje.',
    /* 240 */
    'Sada filtr� se zadan�m jm�nem ji� existuje.',
    'Pohled nem��e m�t v�ce ne� %1 sloupc�.',
    'Hodnota "%1" neodpov�d� definovan�mu form�tu.',
    'U�ivatel nen� p�ihl�en.',
    'Nezn�m� u�ivatelsk� jm�no nebo chybn� heslo.',
    'Nezn�m� typ ov��ov�n�.',
    'Nezn�m� chyba.',
    'Chyba XML parseru.',
    'Chyba p�ipojen� k datab�zi.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Jste si jisti, �e chcete odstranit v�echny vybran� pohledy?',
    'Jste si jisti, �e chcete smazat tento ��et?',
    'Jste si jisti, �e chcete smazat tento projekt?',
    'Jste si jisti, �e chcete vymazat tuto skupinu?',
    'Jste si jisti, �e chcete smazat tuto �ablonu?',
    'Jste si jisti, �e chcete smazat tento stav?',
    'Jste si jisti, �e chcete smazat toto pole?',
    'Jste si jisti, �e chcete odlo�it tento z�znam?',
    'Jste si jisti, �e chcete obnovit tento z�znam?',
    'Jste si jisti, �e chcete p�i�adit tento z�znam?',
    /* 310 */
    'Jste si jisti, �e chcete odstranit v�echny vybran� filtry?',
    'Jste si jisti, �e chcete smazat v�echny vybran� p�edplatn�?',
    'Jste si jisti, �e chcete poslat p�ipom�nku?',
    'Jste si jisti, �e chcete smazat tuto p�ipom�nku?',
    'Jste si jisti, �e chcete smazat tento sloupec?',
    'Jste si jisti, �e se chcete odhl�sit?',
    'Jste si jisti, �e chcete odstranit v�echny vybran� sady filtr�?',
    'Jste si jisti, �e chcete smazat tento z�znam?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    '�e�tina',
    'P�ihl�sit se',
    '  OK  ',
    'Zru�it',
    'Ulo�it',
    'Zp�t',
    'Dal��',
    'Vytvo�it',
    'Zm�nit',
    'Smazat',
    /* 1010 */
    'Z�znamy',
    '��ty',
    'Projekty',
    'Zm�nit heslo',
    'Pole stavu "%1"',
    '��dn�/�',
    'Celkem:',
    'ulo�it heslo',
    'Informace o ��tu',
    'U�ivatelsk� jm�no',
    /* 1020 */
    'Cel� jm�no',
    'E-mail',
    'Opr�vn�n�',
    'administr�tor',
    'u�ivatel',
    'Popis',
    'Heslo',
    'Potvrzen�',
    'zak�z�n',
    'uzam�en',
    /* 1030 */
    'Nov� ��et',
    '��et "%1"',
    'Informace o projektu',
    'Jm�no projektu',
    'Datum a �as zah�jen�',
    'pozastaven',
    'Nov� projekt',
    'Projekt "%1"',
    'Skupiny',
    'Informace o skupin�',
    /* 1040 */
    'N�zev skupiny',
    'Nov� skupina',
    'Skupina "%1"',
    '�lenstv�',
    'Ostatn�',
    '�lenov�',
    '�ablony',
    'Informace o �ablon�',
    'Jm�no �ablony',
    'Prefix',
    /* 1050 */
    'Nov� �ablona',
    '�ablona "%1"',
    'Stavy',
    'Informace o stavu',
    'Jm�no stavu',
    'Zkratka',
    'Typ stavu',
    'po��te�n�',
    'standardn�',
    'koncov�',
    /* 1060 */
    'Odpov�dnost',
    'zachovat',
    'p�i�adit',
    'odstranit',
    'Nov� stav',
    'Stav "%1"',
    'Vytvo�it standardn�',
    'Vytvo�it koncov�',
    'P�echody',
    'Opr�vn�n�',
    /* 1070 */
    'Vytvo�it po��te�n�',
    'P��pustn�',
    'Pole',
    'Informace o poli',
    'Po�ad�',
    'Jm�no pole',
    'Typ pole',
    '��slo',
    '�et�zec',
    'v�ce��dkov� �et�zec',
    /* 1080 */
    'Povinn�',
    'ano',
    'ne',
    'Min. hodnota',
    'Max. hodnota',
    'Max. d�lka',
    'povinn�',
    'Nov� pole (krok %1/%2)',
    'Pole "%1"',
    'pouze pro �ten�',
    /* 1090 */
    '�ten� i z�pis',
    'V�eobecn� informace',
    'ID',
    'Projekt',
    '�ablona',
    'Stav',
    'St���',
    'Nov� z�znam (krok %1/%2)',
    'Z�znam "%1"',
    'Zobraz',
    /* 1100 */
    'Historie',
    'Odlo�it',
    'Pokra�ovat',
    'P�i�adit',
    'Zm�nit stav',
    'Datum vzniku',
    'P�vodce',
    'Z�znam je vytvo�en ve stavu "%1".',
    'Z�znam je p�i�azen u�ivateli %1.',
    'Z�znam je upraven.',
    /* 1110 */
    'Stav je zm�n�n na "%1".',
    'Z�znam je odlo�en do %1.',
    'Z�znam je obnoven.',
    'Soubor "%1" je p�ilo�en.',
    'Soubor "%1" je odstran�n.',
    'opr�vn�n� vytvo�it nov� z�znam',
    'opr�vn�n� modifikovat z�znam',
    'opr�vn�n� odlo�it z�znam',
    'opr�vn�n� obnovit z�znam',
    'opr�vn�n� p�erozd�lit z�znam',
    /* 1120 */
    'opr�vn�n� zm�nit stav z�znamu',
    'opr�vn�n� p�ipojit soubor',
    'opr�vn�n� odstranit soubor',
    'Jazyk',
    'P�idat koment��',
    'Koment�� je p�id�n.',
    'opr�vn�n� p�idat koment��',
    'Koment��',
    'P�ipojit soubor',
    'Odstranit soubor',
    /* 1130 */
    'P��loha',
    'N�zev p��lohy',
    'Soubor',
    'P��lohy',
    '��dn� pole.',
    'Kritick� st���',
    '�as zmrazen�',
    'Zm�ny',
    'Star� hodnota',
    'Nov� hodnota',
    /* 1140 */
    'za�krt�vac� pole',
    'z�znam',
    'seznam',
    'Polo�ky seznamu',
    '%1 Kb',
    'Filtry',
    'Jm�no filtru',
    'V�echny projekty',
    'V�echny �ablony',
    'V�echny stavy',
    /* 1150 */
    'Zobrazit z�znam',
    'Zobrazit pouze vytvo�en� ...',
    'Zobrazit pouze p�id�len� ...',
    'zobrazit pouze neuzav�en�',
    'P�edm�t',
    'Hledat',
    'Parametry vyhled�v�n�',
    'V�sledky vyhled�v�n� (filtrovan�)',
    'Hledan� text',
    'hled�n� v pol�ch',
    /* 1160 */
    'hled�n� v koment���ch',
    'Status',
    'aktivn�',
    'P�edplatn�',
    'ozn�men� p�i vytvo�en� z�znamu',
    'ozn�men� p�i p�i�azen� z�znamu',
    'ozn�men� p�i modifikaci z�znamu',
    'ozn�men� p�i zm�n� stavu',
    'ozn�men� p�i odlo�en� z�znamu',
    'ozn�men� p�i obnoven� z�znamu',
    /* 1170 */
    'ozn�men� p�i p�id�n� koment��e',
    'ozn�men� p�i p�ipojen� p��lohy',
    'ozn�men� p�i odstran�n� p��lohy',
    'povinn�',
    'Odlo�eno',
    'Do dne',
    'V�choz� hodnota',
    'zapnuto',
    'vypnuto',
    'Metriky',
    /* 1180 */
    'Otev�en� z�znamy',
    'Vytvo�en� v. Uzav�en�',
    't�den',
    '��slo',
    'Kop�rovat',
    'Z�znam je kopi� "%1".',
    'Odhl�sit',
    'ozn�men� p�i kop�rov�n� z�znamu',
    'Nastaven�',
    '��dk� na str�nku',
    /* 1190 */
    'Z�lo�ek na str�nku',
    'Uzamknout',
    'Odemknout',
    'Typ skupiny',
    'glob�ln�',
    'm�stn�',
    'Konfigurace',
    'M�stn� cesta',
    'URL',
    'Zabezpe�en�',
    /* 1200 */
    'Minim�ln� d�lka hesla',
    'Maxim�ln� po�et pokus� o p�ihl�en�',
    'Doba uzam�en� (min)',
    'Datab�ze',
    'Typ datab�ze',
    'Oracle',
    'Mysql',
    'Microsoft SQL Server',
    'Datab�zov� server',
    'N�zev datab�ze',
    /* 1210 */
    'U�ivatel',
    'Active Directory',
    'LDAP server',
    '��slo portu',
    '��et pro vyhled�v�n�',
    'Z�kladn� DN',
    'Administr�to�i',
    'Upozorn�n� e-mailem',
    'Maxim�ln� velikost',
    'Lad�n�',
    /* 1220 */
    'Re�im lad�n�',
    'povoleno (bez soukrom�ch data)',
    'povoleno (v�echna data)',
    'Lad�c� soubory',
    'Povoleno',
    'Zak�z�no',
    '%1 min',
    'opr�vn�n� zobrazit z�znamy',
    'Vybrat v�e',
    'Autor',
    /* 1230 */
    'datum',
    'doba trv�n�',
    'Zobrazit pouze odlo�en�',
    'Jm�no p�edplatn�ho',
    'Ud�losti',
    'Verze %1',
    'role',
    'P�ihl�sit se',
    'Odhl�sit se',
    'Upom�nky',
    /* 1240 */
    'N�zev upom�nky',
    'P�edm�t upom�nky',
    'Seznam p��jemc�',
    'Nov� p�ipom�nka (krok %1/%2)',
    'P�ipom�nka "%1"',
    'opr�vn�n� zas�lat p�ipom�nky',
    'Odeslat',
    'Nov� filtr',
    'Filtr "%1"',
    'Nov� p�edplatn�',
    /* 1250 */
    'P�edplatn� "%1"',
    'Va�e heslo LDAP',
    'Odkaz na jin� z�znam lze vlo�it zad�n�m "rec #" a jeho ��slo (nap�. "rec # 305 ").',
    'Zobrazit pouze p�esunut� do stavu ...',
    'Sd�let s ...',
    'Exportovat',
    'Odeb�rat ostatn� ...',
    'P�ihl�en',
    '%1 byl p�ihl�en k z�znamu.',
    '%1 byl odhl�en.',
    /* 1260 */
    'Kopie',
    '�lo�i�t�',
    'LDAP atribut',
    'Pohledy',
    'Informace o pohledu',
    'Jm�no pohledu',
    'Nov� pohled (krok %1/%2)',
    'Pohled "%1"',
    'V�choz� pohled',
    'Nastavit',
    /* 1270 */
    'Sloupce',
    'Informace o sloupci',
    'Z�hlav� sloupce',
    'Nov� sloupec',
    'Sloupec "%1"',
    'Zarovn�n�',
    'doleva',
    'na st�ed',
    'doprava',
    'Slu�ba bude nedostupn� od %1 a� %2 (%3)',
    /* 1280 */
    'V�echny p�id�len� mn�',
    'V�echny vytvo�en� mnou',
    'Odzna�it v�e',
    'm/d/yyyy',
    'V�pis',
    'Pod��zen� z�znamy',
    'Vytvo�it pod��zen� z�znam',
    'P�ipojit pod��zen� z�znam',
    'Odstranit pod��zen� z�znam',
    '�islo pod��zen�ho z�znamu',
    /* 1290 */
    'Pod��zen� z�znam "%1" byl p�id�n.',
    'Pod��zen� z�znam "%1" byl odstran�n.',
    'opr�vn�n� p�idat pod��zen� z�znam',
    'opr�vn�n� odstranit pod��zen� z�znam',
    'ozn�men� p�i vytvo�en� pod��zen�ho z�znamu',
    'ozn�men� p�i zru�en� pod��zen�ho z�znamu',
    'vytvo�en� z�znamy',
    'uzav�en� z�znamy',
    'D�v�rn�',
    'P�idat d�v�rn� koment��',
    /* 1300 */
    'opr�vn�n� p�idat / ��st d�v�rn� koment��',
    'D�v�rn� koment�� byl p�id�n.',
    'Nad��zen� z�znam',
    'z�vislosti',
    'skryt�',
    'P�idat odd�lova�',
    'Odd�lova� CSV',
    'K�dov�n� CSV',
    'Konce ��dk� CSV',
    'V�sledky vyhled�v�n� (nefiltrovan�)',
    /* 1310 */
    'Povolit filtry',
    'Zak�zat filtry',
    'Aktu�ln� sada filtr�',
    'Ulo�it sadu filtr�',
    'Sady filtr�',
    'N�zev sady filtr�',
    'Sada filtr� "%1"',
    'Aktu�ln� pohled',
    'Ulo�it pohled',
    'Rozbalit v�e',
    /* 1320 */
    'Sbalit v�e',
    'Obnovit v�choz�,',
    'L/E',
    'PCRE pro kontrolu hodnot',
    'Vyhled�vac� PCRE pro transformaci hodnoty',
    'Nahrazovac� PCRE pro transformaci hodnoty',
    'V�choz� n�sleduj�c� stav',
    'Stav odlo�en�',
    'zobrazit v�e',
    'zobrazit pouze aktivn�',
    /* 1330 */
    'Ud�lost',
    'Pr�zdn� sada filtr�',
    'Anonymn� p��stup',
    '��dn�.',
    'Glob�ln� skupiny',
    'N�v�t�vn�k',
    'Importovat',
    'opr�vn�n� smazat z�znam',
    'Typ autentizace',
    'V�choz� jazyk',
    /* 1340 */
    'Platnost hesla (ve dnech)',
    'Platnost sezen� (min)',
    'V��et LDAP',
    'PostgreSQL',
    'seznam index�',
    'seznam hodnot',
    'Vytvo�en�',
    'Ozna�it jako p�e�ten�',
    'Registrovan�',
    'TLS',
    /* 1350 */
    'Komprese',
    'L/S',
);

?>