<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Prints the Accessibility Tool user preference page.
 *
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_accessibilitytool;

use moodle_url;

require_once("../../config.php");
require_once("lib.php");
require_once("locallib.php");

require_login();

$PAGE->set_context(\context_system::instance());

$renderer = $PAGE->get_renderer('local_accessibilitytool');
$atr = optional_param("atr", "", PARAM_RAW);
if ($atr == "") {
    $urlparts = parse_url($_SERVER['HTTP_REFERER']);
} else {
    $urlparts = parse_url(urldecode($atr));
}

$queryparams = [];
if (isset($urlparts['query'])) {
    $queryparts = explode('&', $urlparts['query']);

    foreach ($queryparts as $part) {
        list($key, $val) = explode('=', $part);
        $queryparams[$key] = $val;
    }
}

$returnurl = new \moodle_url($urlparts['path'], $queryparams);

$menu = new \local_accessibilitytool\output\menu();
$menu->set_returnurl($returnurl);

$section = optional_param("k", "", PARAM_ALPHA);

if ($section !== "") {
    $value = required_param("v", PARAM_ALPHANUMEXT);
    $menu->set_user_preference($section, $value);
}

$PAGE->set_url('/local/accessibilitytool/manage.php');

$PAGE->set_title(get_string("accessibilitytool", "local_accessibilitytool"));

$PAGE->set_heading(get_string("accessibilitytool", "local_accessibilitytool"));


echo $OUTPUT->header();

echo $renderer->render($menu);

echo $OUTPUT->footer();
