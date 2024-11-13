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
 * Functions used by the Accessibility Tool.
 *
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link https://www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_accessibilitytool;

/**
 * Applies user preferences to current page
 * by adding classes to header and loading javascript.
 * @param moodle_page $page Page object
 */
function apply_settings(\moodle_page $page) {

    $page->add_body_class('accessibilitytool');
    $extraclasses = [];

    $fontsettings = explode(',', get_config('local_accessibilitytool', 'fontstyle'));
    $font = get_user_preferences('accessibilitytool_font', "default");
    if (in_array($font, $fontsettings)) {
        $extraclasses[] = 'at-font-' . $font;
    }

    $size = get_user_preferences('accessibilitytool_size', "default");
    if (in_array($size, ['large', 'huge', 'massive', 'gigantic'])) {
        $extraclasses[] = 'at-size-' . $size;
    }

    $contrastsettings = explode(',', get_config('local_accessibilitytool', 'contrast'));
    $contrast = get_user_preferences('accessibilitytool_contrast', "default");
    if (in_array($contrast, $contrastsettings)) {
        $extraclasses[] = 'at-contrast';
        $extraclasses[] = 'at-contrast-' . $contrast;
    }

    $bold = get_user_preferences('accessibilitytool_bold', 0);
    if ($bold) {
        $extraclasses[] = 'at-bold';
    }

    $spacing = get_user_preferences('accessibilitytool_spacing', 0);
    if ($spacing) {
        $extraclasses[] = 'at-spacing';
    }

    $stripstyles = get_user_preferences('accessibilitytool_stripstyles', 0);
    if ($stripstyles) {
        $page->requires->js_call_amd('local_accessibilitytool/stripstyles', 'init');
    }

    $page->add_body_classes($extraclasses);

}
