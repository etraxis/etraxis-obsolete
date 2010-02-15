<?php

/**
 * Localization
 *
 * This module contains prompts translated in Italian.
 * All the prompts are in ISO-8859-1 encoding.
 *
 * @package Engine
 * @subpackage Localization
 * @author Giacomo Giustozzi
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
//  Giacomo Giustozzi       2010-02-01      new-904: Italian localization.
//  Artem Rodygin           2010-02-04      new-902: Transparent gzip compression of attachments
//  Giacomo Giustozzi       2010-02-08      bug-916: Italian localization fixes
//--------------------------------------------------------------------------------------------------

$resource_italian = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Tutti i campi segnati come obbligatori devono essere compilati.',
    'Il valore predefinito deve essere compreso tra %1 e %2.',
    'L\'account � disabilitato.',
    'L\'account � stato bloccato.',
    'Nome utente non valido.',
    'Nome utente gi� utilizzato.',
    'Email non valida.',
    'Le password non coincidono.',
    'La password deve essere almeno lunga %1 caratteri.',
    'Nome progetto gi� utilizzato.',
    /* 210 */
    'Nome gruppo gi� utilizzato.',
    'Un modello con lo stesso nome o prefisso � gi� utilizzato.',
    'Uno stato con lo stesso nome o abbreviazione � gi� utilizzato.',
    'Nome campo gi� utilizzato.',
    'Intervallo numerico non valido.',
    'Il valore numerico deve essere compreso tra %1 e %2.',
    'Il valore "%1" deve essere compreso tra %2 e %3.',
    'Il valore massimo deve essere maggiore del valore minimo.',
    'Il file uploadato eccede la direttiva "upload_max_filesize" nel "php.ini".',
    'La dimensione massima consentita per gli allegati � di %1 KBytes.',
    /* 220 */
    'Il file � stato uploadato solo parzialmente.',
    'Non � stato uploadato alcun file.',
    'Directory temporanea non trovata.',
    'Un allegato con lo stesso nome � gi� esistente.',
    'Record non trovato.',
    'Nome filtro gi� utilizzato.',
    'Data non valida.',
    'Il valore della data deve essere compreso tra %1 e %2.',
    'Ora non valida.',
    'Il valore dell\'ora deve essere compreso tra %1 e %2.',
    /* 230 */
    'Nome sottoscrizione gi� utilizzato.',
    'Nome sollecito gi� utilizzato.',
    'Sollecito inviato correttamente.',
    'Nome vista gi� utilizzato.',
    'Nome colonna gi� utilizzato.',
    'Impossibile scrivere il file su disco.',
    'Upload del file bloccato da una estensione.',
    'Il JavaScript deve essere abilitato.',
    'Questo messaggio � stato generato automaticamente, per favore non rispondere.',
    'Subrecord specificato gi� esistente.',
    /* 240 */
    'Esistono gi� dei filtri con il nome inserito.',
    'La vista non pu� avere pi� di %1 colonne.',
    'Il valore di "%1" non � valido.',
    'Utente non autorizzato.',
    'Nome utente non riconosciuto o password errata.',
    'Tipo di autenticazione non valida.',
    'Errore sconosciuto.',
    'Errore nel parser XML.',
    'Errore nella connessione al DB.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Eliminare tutte le viste selezionate?',
    'Eliminare questo account?',
    'Eliminare questo progetto?',
    'Eliminare questo gruppo?',
    'Eliminare questo modello?',
    'Eliminare questo stato?',
    'Eliminare questo campo?',
    'Posporre questo record?',
    'Riprendere questo record?',
    'Assegnare questo record?',
    /* 310 */
    'Eliminare tutti i filtri selezionati?',
    'Eliminare tutte le sottoscrizioni selezionate?',
    'Inviare questo sollecito?',
    'Eliminare questo sollecito?',
    'Eliminare questa colonna?',
    'Vuoi davvero uscire?',
    'Eliminare tutti i set di filtri selezionati?',
    'Eliminare questo record?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Italiano',
    'Login',
    '  OK  ',
    'Annulla',
    'Salva',
    'Indietro',
    'Avanti',
    'Crea',
    'Modifica',
    'Elimina',
    /* 1010 */
    'Record',
    'Account',
    'Progetti',
    'Cambia password',
    'Campi dello stato "%1"',
    'nessuno',
    'Totale:',
    'salva password',
    'Informazioni sull\'account',
    'Nome utente',
    /* 1020 */
    'Nome completo',
    'Email',
    'Permessi',
    'amministratore',
    'utente',
    'Descrizione',
    'Password',
    'Conferma',
    'disabilitato',
    'bloccato',
    /* 1030 */
    'Nuovo account',
    'Account "%1"',
    'Informazioni sul progetto',
    'Nome del progetto',
    'Data di inizio',
    'sospeso',
    'Nuovo progetto',
    'Progetto "%1"',
    'Gruppi',
    'Informazioni sul gruppo',
    /* 1040 */
    'Nome del gruppo',
    'Nuovo gruppo',
    'Gruppo "%1"',
    'Membri',
    'Altri',
    'Membri',
    'Modelli',
    'Informazioni sul modello',
    'Nome del modello',
    'Prefisso',
    /* 1050 */
    'Nuovo modello',
    'Modello "%1"',
    'Stati',
    'Informazioni sullo stato',
    'Nome dello stato',
    'Abbreviazione',
    'Tipo dello stato',
    'iniziale',
    'intermedio',
    'finale',
    /* 1060 */
    'Responsabile',
    'mantieni',
    'assegna',
    'rimuovi',
    'Nuovo stato',
    'Stato "%1"',
    'Crea intermedio',
    'Crea finale',
    'Transizioni',
    'Permessi',
    /* 1070 */
    'Segna come iniziale',
    'Abilitato',
    'Campi',
    'Informazioni sul campo',
    'Ordine',
    'Nome del campo',
    'Tipo del campo',
    'numerico',
    'testuale',
    'casella di testo',
    /* 1080 */
    'Obbligatorio',
    'si',
    'no',
    'Valore Min.',
    'Valore Max.',
    'Lunghezza Max.',
    'obbligatorio',
    'Nuovo campo (step %1/%2)',
    'Campo "%1"',
    'sola lettura',
    /* 1090 */
    'lettura e scrittura',
    'Informazioni generali',
    'ID',
    'Progetto',
    'Modello',
    'Stato',
    'Et�',
    'Nuovo record (step %1/%2)',
    'Record "%1"',
    'Vai',
    /* 1100 */
    'Storia',
    'Posponi',
    'Riprendi',
    'Assegna',
    'Cambia stato',
    'Timestamp',
    'Originatore',
    'Il record � stato creato nello stato "%1".',
    'Il record � stato assegnato a %1.',
    'Il record � stato modificato.',
    /* 1110 */
    'Lo stato � stato cambiato in "%1".',
    'Il record � stato posposto fino al %1.',
    'Il record � stato ripreso.',
    'Il file "%1" � stato allegato.',
    'Il file "%1" � stato rimosso.',
    'abilitazione a creare dei record',
    'abilitazione a modificare dei record',
    'abilitazione a posporre dei record',
    'abilitazione a riprendere dei record',
    'abilitazione a riassegnare record gi� assegnati',
    /* 1120 */
    'abilitazione a cambiare lo stato di record assegnati',
    'abilitazione ad allegare file',
    'abilitazione a rimuovere allegati',
    'Lingua',
    'Aggiungi commento',
    'Il commento � stato aggiunto.',
    'abilitazione ad aggiungere commenti',
    'Commenta',
    'Allega file',
    'Rimuovi file',
    /* 1130 */
    'Allegato',
    'Name dell\'allegato',
    'File allegato',
    'Allegati',
    'Nessun campo.',
    'Et� critica',
    'Tempo di congelamento',
    'Cambiamenti',
    'Vecchio valore',
    'Nuovo valore',
    /* 1140 */
    'checkbox',
    'record',
    'lista',
    'Elementi della lista',
    '%1 KB',
    'Filtri',
    'Nome del filtro',
    'Tutti i progetti',
    'Tutti i modelli',
    'Tutti gli stati',
    /* 1150 */
    'Visualizza record',
    'Mostra solo quelli creati da ...',
    'Mostra solo quelli assegnati a ...',
    'mostra solo quelli aperti',
    'Oggetto',
    'Ricerca',
    'Parametri della ricerca',
    'Risultati della ricerca (filtrati)',
    'Testo da cercare',
    'cerca nei campi',
    /* 1160 */
    'cerca nei commenti',
    'Stato',
    'attivo',
    'Sottoscrizioni',
    'notifica alla creazione di un record',
    'notifica all\'assegnazione di un record',
    'notifica alla modifica di un record',
    'notifica al cambio di stato',
    'notifica quando un record viene posposto',
    'notifica quando un record viene ripreso',
    /* 1170 */
    'notifica quando viene aggiunto un commento',
    'notifica quando viene aggiunto un allegato',
    'notifica quando viene rimosso un allegato',
    'obbligatorio',
    'Posposto',
    'Data limite',
    'Valore predefinito',
    'on',
    'off',
    'Statistiche',
    /* 1180 */
    'Record aperti',
    'Rapporto Creazioni/Chiusure',
    'settimana',
    'numero',
    'Clona',
    'Il record � stato clonato da "%1".',
    'Esci',
    'notifica quando alla clonazione di un record',
    'Impostazioni',
    'Righe per pagina',
    /* 1190 */
    'Bookmark per pagina',
    'Blocca',
    'Sblocca',
    'Tipo di gruppo',
    'globale',
    'locale',
    'Configurazione',
    'Percorso della root locale',
    'Percorso della web root',
    'Sicurezza',
    /* 1200 */
    'Lunghezza minima della password',
    'Numero massimo dei tentativi di accesso',
    'Durata del blocco all\'accesso (minuti)',
    'Database',
    'Tipo di database',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Server del Database',
    'Nome del database',
    /* 1210 */
    'Utente del database',
    'Active Directory',
    'Server LDAP',
    'Porta',
    'Account per la ricerca',
    'DN base',
    'Amministratori',
    'Notifiche via email',
    'Dimensione massima',
    'Debug',
    /* 1220 */
    'Modalit� di debug',
    'abilitata (senza dati riservati)',
    'abilitata (tutti i dati)',
    'Debug logs',
    'Abilitato',
    'Disabilitato',
    '%1 minuri',
    'abilitazione alla sola visualizzazione dei record',
    'Seleziona tutto',
    'Autore',
    /* 1230 */
    'data',
    'durata',
    'mostra solo rimandati',
    'Nome sottoscrizione',
    'Eventi',
    'Versione %1',
    'ruolo',
    'Sottoscrivi',
    'Desottoscrivi',
    'Solleciti',
    /* 1240 */
    'Nome sollecito',
    'Oggetto del sollecito',
    'Destinatari del sollecito',
    'Nuovo sollecito (step %1/%2)',
    'Sollecito "%1"',
    'abilitazione ad inviare solleciti',
    'Invia',
    'Nuovo filtro',
    'Filtro "%1"',
    'Nuova sottoscrizione',
    /* 1250 */
    'Sottoscrizione "%1"',
    'Password LDAP',
    'E\' possibile inserire link ad un altro record specificando "rec#" e il suo numero (ad esempio "rec#305").',
    'Mostra solo quelli negli stati ...',
    'Condividi con ...',
    'Esporta',
    'Sottoscrivi altri ...',
    'Sottoscritto',
    '%1 ti ha sottoscritto al record.',
    '%1 se � desottoscritto.',
    /* 1260 */
    'Copia carbone',
    'Directory',
    'Attributi LDAP',
    'Viste',
    'Informazioni sulla vista',
    'Nome della vista',
    'Nuova vista (step %1/%2)',
    'Vista "%1"',
    'Nessuna vista',
    'Imposta',
    /* 1270 */
    'Colonne',
    'Informazioni sulla colonna',
    'Titolo della colonna',
    'Nuova colonna',
    'Colonna "%1"',
    'Allineamento',
    'sinistra',
    'centrato',
    'destra',
    'Il servizio non sar� disponibile dal %1 al %2 (%3)',
    /* 1280 */
    'Tutti quelli assegnati a me',
    'Tutti quelli creati da me',
    'Deseleziona tutti',
    'gg/mm/aaaa',
    'Download',
    'Subrecord',
    'Crea subrecord',
    'Collega subrecord',
    'Rimuovi subrecord',
    'ID del subrecord',
    /* 1290 */
    'Il subrecord "%1" � stato aggiunto.',
    'Il subrecord "%1" � stato rimosso.',
    'abilitazione ad aggiungere subrecords',
    'abilitazione a rimuovere subrecords',
    'notifica quando un subrecord viene aggiunto',
    'notifica quando un subrecord viene rimosso',
    'record creati',
    'record chiusi',
    'Riservato',
    'Aggiungi commento riservato',
    /* 1300 */
    'abilitazione ad aggiuntere/rimuovere commenti riservati',
    'Il comment riservato � stato aggiunto.',
    'ID padre',
    'dipendenza',
    'nascosto',
    'Aggiungi separatore',
    'Delimitatore CSV',
    'Codifica CSV',
    'Terminatori di linea CSV',
    'Risultati ricerca (non filtrati)',
    /* 1310 */
    'Abilita filtri',
    'Disabilita filtri',
    'Set di filtri correnti',
    'Salva set di filtri',
    'Set di filtri',
    'Nome del seti di filtri',
    'Set di filtri "%1"',
    'Vista corrente',
    'Salva vista',
    'Espandi tutti',
    /* 1320 */
    'Raggruppa tutti',
    'Resetta alle impostazioni predefinite',
    'U/E',
    'PCRE di verifica della validit� del campo',
    'PCRE di ricerca per modificare il valore',
    'PCRE di sostituzione per modificare il valore',
    'Stato successivo predefinito',
    'Record posposti',
    'mostra tutti',
    'mostra solo attivi',
    /* 1330 */
    'Evento',
    'Nessun set di filtri',
    'Accesso ospite',
    'Nessuno.',
    'Gruppi globali',
    'Ospite',
    'Importa',
    'abilitazione ad eliminare record',
    'Tipo di autenticazione',
    'Lingua predefinita',
    /* 1340 */
    'Scadenza password (giorni)',
    'Timeout sessione (minuti)',
    'Enumerazione LDAP',
    'PostgreSQL',
    'lista di indici',
    'lista di valori',
    'Creato',
    'Segna come letto',
    'Registrato',
    'TLS',
    /* 1350 */
    'Compressione',
);

?>
