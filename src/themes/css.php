<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2010  Artem Rodygin
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
require_once('../engine/config.php');
require_once('../engine/xml.php');
require_once('../engine/themes.php');
/**#@-*/

@session_start();

// Check the requested name for validness.

$name = isset($_REQUEST['name'])
      ? $_REQUEST['name']
      : NULL;

mb_regex_encoding('UTF-8');

if (!mb_eregi('^([_0-9a-z\.\-])+$', $name))
{
    exit;
}

// Check the script file for existance.

$file = get_theme_css_file($name);

// Output requested script file.

$output = file_get_contents($file);

// Check whether required extensions is available and PHP compression is turned off.
if (extension_loaded('zlib') && !ini_get('zlib.output_compression'))
{
    // Check whether a client's browser support gzip-compression.
    if (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE)
    {
        $output = gzencode($output);
        header('Content-Encoding: gzip');
    }
    // Check whether a client's browser support deflate-compression.
    elseif (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'deflate') !== FALSE)
    {
        $output = gzdeflate($output);
        header('Content-Encoding: deflate');
    }
}

header('Content-Type: text/css');
header('Content-Length: ' . strlen($output));
header('Pragma: cache');
header('Cache-Control: public');
header('Last-Modified: ' . date(DATE_RFC822, filectime($file)));
header('Expires: ' . date(DATE_RFC822, time() + 86400));
header('ETag: "' . md5(sprintf('%s/%s', VERSION, $file)) . '"');

echo($output);

?>
