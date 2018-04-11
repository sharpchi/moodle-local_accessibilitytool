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
 * Accessibility Tool plugin library.
 *
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . "/local/accessibilitytool/locallib.php");

/**
 * Called by theme's page_init function to set classes and load scripts.
 *
 * @param moodle_page $page Main page object.
 */
function local_accessibilitytool_page_init(moodle_page $page) {
    \local_accessibilitytool\add_usermenuitem();
    \local_accessibilitytool\apply_settings($page);
}

/**
 * Get icon mapping for font-awesome.
 */
function local_accessibilitytool_get_fontawesome_icon_map() {
    return [
        'core:t/../e/accessibility_checker' => 'fa-universal-access'
    ];
}
