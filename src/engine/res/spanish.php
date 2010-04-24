<?php

/**
 * Localization
 *
 * This module contains prompts translated in Spanish (ES).
 * All the prompts are in ISO-8859-1 encoding.
 *
 * @package Engine
 * @subpackage Localization
 * @author Normando Hall
 */

//--------------------------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system.
//  Copyright (C) 2007-2010 by Artem Rodygin
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
//  Normando Hall           2007-12-26      new-658: Spanish localization.
//  Normando Hall           2007-12-28      new-659: Set default language
//  Artem Rodygin           2007-12-30      bug-660: [SF1860788] PHP4 html_entity_decode() is not working
//  Normando Hall           2008-01-17      new-666: Buttons "Previous" & "Next" on record view page.
//  Normando Hall           2008-01-28      new-531: LDAP Guest users
//  Normando Hall           2008-01-31      new-601: [SF1814666] Export and Import Templates
//  Normando Hall           2008-02-27      new-676: [SF1898731] Delete Issues from Workflow
//  Artem Rodygin           2008-02-28      new-294: PostgreSQL support.
//  Normando Hall           2008-03-03      bug-681: Update configuration page with new options.
//  Normando Hall           2008-04-30      bug-699: Views // Names of custom columns are duplicated in the list of available columns, when there are two fields of different types with the same name.
//  Normando Hall           2008-05-01      new-715: Show creation time in the list of records.
//  Normando Hall           2008-08-07      new-729: [SF2008579] Mark all records as read
//  Normando Hall           2008-11-12      new-749: Guest access for unauthorized users.
//  Normando Hall           2009-01-08      new-774: 'Anyone' system role permissions.
//  Artem Rodygin           2009-04-12      bug-806: German translation causes two ambiguous "zuruck" buttons.
//  Artem Rodygin           2009-04-26      new-817: Field permissions dialog refactoring.
//  Artem Rodygin           2009-04-26      new-818: Change buttons layout on viewing record page.
//  Artem Rodygin           2009-10-12      new-848: LDAP TLS support.
//  Artem Rodygin           2009-10-12      new-837: Replace "Groups" with "Global groups" in main menu.
//  Artem Rodygin           2010-02-01      new-902: Transparent gzip compression of attachments
//  Artem Rodygin           2010-04-24      new-933: New column LS/T(Last State Time)
//--------------------------------------------------------------------------------------------------

$resource_spanish = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Debe completar los campos marcados como obligatorios.',
    'El valor predeterminado debe estar comprendido entre %1 y %2.',
    'La cuenta esta deshabilitada.',
    'La cuenta esta bloqueada.',
    'Nombre de usuario inv�lido.',
    'Ya existe una cuenta con ese nombre de usuario.',
    'Email inv�lido.',
    'Las contrase�as no coinciden.',
    'La contrase�a debe tener una logintud m�nima de %1 caracteres.',
    'Ya existe un Proyecto con ese nombre.',
    /* 210 */
    'Ya existe un Grupo con ese nombre.',
    'Ya existe una Plantilla con ese nombre o prefijo.',
    'Ya existe un Estado con ese nombre o inicial.',
    'Ya existe un Campo con ese nombre.',
    'Valor entero inv�lido.',
    'El entero debe estar comprendido entre %1 y %2.',
    'El valor "%1" debe estar comprendido entre %2 y %3.',
    'El m�ximo valor debe ser mayor que el m�nimo.',
    'El archivo subido excede la directiva "upload_max_filesize" en "php.ini".',
    'El tama�o del archivo subido no debe superar los %1 Kbytes.',
    /* 220 */
    'El archivo subido fue parcialmente cargado.',
    'No se ha cargado el archivo.',
    'Carpeta temporal inexistente.',
    'Ya existe un Adjunto con ese nombre.',
    'No se encontraron registros.',
    'Ya existe un Filtro con ese nombre.',
    'Fecha inv�lida.',
    'La fecha debe estar comprendida entre %1 y %2.',
    'Hora inv�lida.',
    'La hora debe estar comprendida entre %1 y %2.',
    /* 230 */
    'Ya existe una Suscripci�n con ese nombre.',
    'Ya existe un Recordatorio con ese nombre.',
    'El recordatorio fue correctamente enviado.',
    'Ya existe una Vista con ese nombre.',
    'Ya existe una columna con ese nombre.',
    'Falla al escribir el archivo al disco.',
    'Se detuvo la carga del archivo por la extensi�n.',
    'Debe tener habilitado JavaScript.',
    'Este es un mensaje autom�tico, por favor no lo responda.',
    'Ya existe el subregistro especificado.',
    /* 240 */
    'Ya existe un Conjunto de Filtros con ese nombre.',
    'La vista no puede tener mas de %1 columnas.',
    'El valor de "%1" fall� en la varificaci�n de formato.',
    'Usuario no autorizado.',
    'Nombre de usuario desconocido o contrase�a incorrecta.',
    'Tipo de autenticaci�n desconocida.',
    'Error desconocido.',
    'Error del analizador XML.',
    'Error de conexi�n a la base de datos.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    '�Est� seguro de eliminar todas las vistas seleccionadas?',
    '�Est� seguro de eliminar esta cuenta?',
    '�Est� seguro de eliminar este proyecto?',
    '�Est� seguro de eliminar este grupo?',
    '�Est� seguro de eliminar esta plantilla?',
    '�Est� seguro de eliminar este estado?',
    '�Est� seguro de eliminar este campo?',
    '�Est� seguro de aplazar este registro?',
    '�Est� seguro de reanudar este registro?',
    '�Est� seguro de asignar este registro?',
    /* 310 */
    '�Est� seguro de eliminar todos los filtros seleccionados?',
    '�Est� seguro de eliminar todas las suscripciones seleccionadas?',
    '�Est� seguro de enviar este recordatorio?',
    '�Est� seguro de eliminar este recordatorio?',
    '�Est� seguro de eliminar esta columna?',
    '�Est� seguro de salir?',
    '�Est� seguro de eliminar todos los conjuntos de filtros seleccionados?',
    '�Est� seguro de eliminar este registro?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Espa�ol',
    'Ingresar',
    '  OK  ',
    'Cancelar',
    'Guardar',
    'Atras',
    'Siguiente',
    'Crear',
    'Modificar',
    'Eliminar',
    /* 1010 */
    'Registros',
    'Cuentas',
    'Proyectos',
    'Cambiar contrase�a',
    'Campos del estado "%1"',
    'ninguno',
    'Total:',
    'guardar contrase�a',
    'Informaci�n de la cuenta',
    'Nombre de usuario',
    /* 1020 */
    'Nombre completo',
    'Email',
    'Derechos',
    'administrador',
    'usuario',
    'Descripci�n',
    'Contrase�a',
    'Confirmaci�n',
    'deshabilitado',
    'bloqueado',
    /* 1030 */
    'Nueva cuenta',
    'Cuenta "%1"',
    'Informaci�n del proyecto',
    'Nombre del proyecto',
    'Fecha de inicio',
    'suspendido',
    'Nuevo proyecto',
    'Proyecto "%1"',
    'Grupos',
    'Informaci�n del grupo',
    /* 1040 */
    'Nombre del grupo',
    'Nuevo grupo',
    'Grupo "%1"',
    'Membres�a',
    'Otros',
    'Miembros',
    'Plantillas',
    'Informaci�n de plantilla',
    'Nombre de plantilla',
    'Prefijo',
    /* 1050 */
    'Nueva plantilla',
    'Plantilla "%1"',
    'Estados',
    'Informaci�n de estados',
    'Nombre de estado',
    'Iniciales',
    'Tipo de estado',
    'inicial',
    'intermedio',
    'final',
    /* 1060 */
    'Responsable',
    'dejar sin cambios',
    'asignar',
    'eliminar',
    'Nuevo estado',
    'Estado "%1"',
    'Crear intermedio',
    'Crear final',
    'Transiciones',
    'Permisos',
    /* 1070 */
    'Hacer inicial',
    'Permitido',
    'Campos',
    'Informaci�n de campos',
    'Orden',
    'Nombre de campo',
    'Tipo de campo',
    'n�mero',
    'cadena',
    'texto multil�nea',
    /* 1080 */
    'Obligatorio',
    'si',
    'no',
    'Min.valor',
    'Max.valor',
    'Max.longitud',
    'obligatorio',
    'Nuevo campo (paso %1/%2)',
    'Campo "%1"',
    's�lo lectura',
    /* 1090 */
    'lectura y escritura',
    'Informaci�n general',
    'ID',
    'Proyecto',
    'Plantilla',
    'Estado',
    'Edad',
    'Nuevo registro (paso %1/%2)',
    'Registro "%1"',
    'Ir',
    /* 1100 */
    'Historial',
    'Aplazar',
    'Reanudar',
    'Asignar',
    'Cambiar estado',
    'Fecha y Hora',
    'Originado por',
    'Registro creado con el estado "%1".',
    'Se asign� el registro a %1.',
    'Se modific� el registro.',
    /* 1110 */
    'Se cambi� el estado a "%1".',
    'Se aplaz� el registro hasta el %1.',
    'Se reanud� el registro.',
    'Se adjunt� el archivo "%1".',
    'El archivo "%1" fue eliminado.',
    'permiso para crear registros',
    'permiso para modificar registros',
    'permiso para aplazar registros',
    'permiso para reanudar registros',
    'permiso para reasignar registros asignados',
    /* 1120 */
    'permiso para cambiar el estado de registros asignados',
    'permiso para adjuntar archivos',
    'permiso para eliminar archivos',
    'Idioma',
    'A�adir comentario',
    'Se a�adi� un comentario.',
    'permiso para a�adir comentarios',
    'Comentario',
    'Adjuntar archivos',
    'Eliminar archivos',
    /* 1130 */
    'Adjunto',
    'Nombre adjunto',
    'Archivo adjunto',
    'Adjuntos',
    'Sin campos.',
    'Auto expiraci�n',
    'Tiempo congelado',
    'Cambios',
    'Valor anterior',
    'Valor nuevo',
    /* 1140 */
    'casilla de verificaci�n',
    'registro',
    'lista',
    'Lista de �tems',
    '%1 Kb',
    'Filtros',
    'Nombre del Filtro',
    'Todos los proyectos',
    'Todas las plantillas',
    'Todos los estados',
    /* 1150 */
    'Ver registro',
    'Mostrar s�lo los creados por ...',
    'Mostrar s�lo los asignados a ...',
    'mostrar �nicamente los no cerrados',
    'Asunto',
    'Buscar',
    'Buscar par�metros',
    'Buscar resultados (filtrado)',
    'Texto para buscar',
    'buscar en campos',
    /* 1160 */
    'buscar en comentarios',
    'Estado',
    'activo',
    'Suscripciones',
    'notificar cuando un registro sea creado',
    'notificar cuando un registro sea asignado',
    'notificar cuando un registro sea modificado',
    'notificar cuando el estado sea cambiado',
    'notificar cuando un registro sea aplazado',
    'notificar cuando un registro sea reanudado',
    /* 1170 */
    'notificar cuando un coomentario sea agregado',
    'notificar cuando un archivo sea adjuntado',
    'notificar cuando un archivo sea eliminado',
    'obligatorio',
    'Aplazado',
    'Fecha de vencimiento',
    'Valor predeterminado',
    'on',
    'off',
    'M�trica',
    /* 1180 */
    'Registros abiertos',
    'Creados vs Cerrados',
    'semana',
    'cantidad',
    'Clon',
    'El registro fue clonado desde "%1".',
    'Salir',
    'notificar cuando un registro sea clonado',
    'Ajustes',
    'Filas por p�gina',
    /* 1190 */
    'Favoritos por p�gina',
    'Bloquear',
    'Desbloquear',
    'Tipo de grupo',
    'global',
    'local',
    'Configuraci�n',
    'Ruta local',
    'Ruta web',
    'Seguridad',
    /* 1200 */
    'Longitud m�nima de contrase�a',
    'Reintentos m�ximos de ingreso',
    'Bloqueo de tiempo (min)',
    'Base de datos',
    'Tipo de base de datos',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Servidor de base de datos',
    'Nombre de la base de datos',
    /* 1210 */
    'Usuario de la base de datos',
    'Directorio Activo',
    'Servidor LDAP',
    'Puerto',
    'Buscar cuenta',
    'Base DN',
    'Administradores',
    'Notificaciones por Email',
    'Tama�o m�ximo',
    'Depuraci�n',
    /* 1220 */
    'Modo de depuraci�n',
    'habilitado (sin datos privados)',
    'habilitado (todos los datos)',
    'Registro de depuraci�n',
    'Habilitado',
    'Deshabilitado',
    '%1 min',
    'permiso para ver s�lo regitros',
    'Seleccionar todo',
    'Autor',
    /* 1230 */
    'fecha',
    'duraci�n',
    's�lo aplazados',
    'Nombre de la suscripci�n',
    'Eventos',
    'Versi�n %1',
    'rol',
    'Suscribirse',
    'De-suscribirse',
    'Recordatorios',
    /* 1240 */
    'Nombre de recordatorio',
    'Asunto del recordatorio',
    'Destinatarios del recordatorio',
    'Nuevo recordatorio (paso %1/%2)',
    'Recordatorio "%1"',
    'permiso para enviar recordatorios',
    'Enviar',
    'Nuevo filtro',
    'Filtro "%1"',
    'Nueva suscripci�n',
    /* 1250 */
    'Suscripci�n "%1"',
    'Su contrase�a LDAP',
    'Puede insertar un enlace hacia otro registro ingresando "rec#" y el n�mero del mismo (ej. "rec#305").',
    'Mostrar s�lo los movidos al estado ...',
    'Compartir con ...',
    'Exportar',
    'Suscribir a otros...',
    'Suscripto',
    '%1 lo ha suscripto al registro.',
    '%1 se ha desuscripto.',
    /* 1260 */
    'Copia carb�nica',
    'Almacenamiento',
    'Atributo LDAP',
    'Vistas',
    'Ver informaci�n',
    'Ver nombre',
    'Nueva vista (paso %1/%2)',
    'Vista "%1"',
    'Sin vistas',
    'Fijar',
    /* 1270 */
    'Columnas',
    'Informaci�n de columna',
    'T�tulo de columna',
    'Nueva columna',
    'Columna "%1"',
    'Alineaci�n',
    'izquierda',
    'centro',
    'derecha',
    'El servicio no estar� disponible desde el %1 hasta %2 (%3)',
    /* 1280 */
    'Todos los asignados a mi',
    'Todos los creados por mi',
    'Deseleccionar todos',
    'd/m/yyyy',
    'Descargar',
    'Subregistros',
    'Crear subregistro',
    'Adjuntar subregistro',
    'Eliminar subregistro',
    'ID Subregistro',
    /* 1290 */
    'El subregistro "%1" fue a�adido.',
    'El subregistro "%1" fue eliminado.',
    'permiso para a�adir subregistros',
    'permiso para eliminar subregistros',
    'notificar cuando un subregistro sea a�adido',
    'notificar cuando un subregistro sea eliminado',
    'registros creados',
    'registros cerrados',
    'Confidencial',
    'A�adir comentario confidencial',
    /* 1300 */
    'permiso para a�adir/leer comentarios confidenciales',
    'Fue a�adido un comentario confidencial.',
    'ID Padre',
    'dependencia',
    'oculto',
    'Agregar separador',
    'Delimitador CSV',
    'Codificaci�n CSV',
    'Final de l�nea CSV',
    'Buscar resultados (sin filtrar)',
    /* 1310 */
    'Habilitar filtros',
    'Deshabilitar filtros',
    'Conjunto actual de filtros',
    'Guardar conjunto de filtros',
    'Conjuntos de filtros',
    'Nombre del conjunto de filtros',
    'Conjunto de filtro "%1"',
    'Vista actual',
    'Guardar vista',
    'Expandir todo',
    /* 1320 */
    'Colapsar todo',
    'Reinicializar con los valores predeterminados',
    'P/Ev',
    'Usar PCRE para verificar el valor de los campos',
    'Buscar PCRE para transformar el valor de los campos',
    'Reemplazar PCRE para transformar el valor de los campos',
    'Estado siguiente predeterminado',
    'Estados de aplazo',
    'todos',
    's�lo activos',
    /* 1330 */
    'Evento',
    'Sin conjunto de filtros',
    'Acceso de invitado',
    'Ninguno.',
    'Global grupos',
    'Invitado',
    'Importar',
    'permiso para eliminar registros',
    'Tipo de autenticaci�n',
    'Idioma predeterminado',
    /* 1340 */
    'Expiraci�n de contrase�a (d�as)',
    'Expiraci�n de la sesi�n (min)',
    'LDAP enumeraci�n',
    'PostgreSQL',
    'lista de n�meros',
    'lista de cadenas',
    'Creado',
    'Marcar como le�do',
    'Registrado',
    'TLS',
    /* 1350 */
    'Compresi�n',
    'P/Es',
);

?>
