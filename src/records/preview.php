<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2010-2011  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * @package eTraxis
 * @ignore
 */

/**#@+
 * Dependency.
 */
require_once('../engine/engine.php');
require_once('../dbo/records.php');
/**#@-*/

init_page(LOAD_TAB);

// generate preview

$title = sprintf('%s - %s (%s)',
                 get_datetime(time()),
                 $_SESSION[VAR_FULLNAME],
                 account_get_username($_SESSION[VAR_USERNAME]));

$xml = '<group title="' . ustr2html($title) . '">'
     . '<text>'
     . update_references(try_request('rcomment'))
     . '</text>'
     . '</group>';

echo(xml2html($xml));

?>
