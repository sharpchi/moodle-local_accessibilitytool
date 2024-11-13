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
 * Settings for Accessibility tool.
 *
 * @package    local_accessibilitytool
 * @copyright  2020 University of Chichester {@link https://www.chi.ac.uk}
 * @author     Mark Sharp <m.sharp@chi.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use core\lang_string;

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_accessibilitytool', get_string('pluginname', 'local_accessibilitytool'));
    $ADMIN->add('localplugins', $settings);

    $name = 'local_accessibilitytool/enable';
    $title = new lang_string('enable', 'local_accessibilitytool');
    $description = '';
    $settings->add(new admin_setting_configcheckbox($name, $title, $description, true));

    $options = [
        "bb" => new lang_string('contrastbb', 'local_accessibilitytool'),
        "bg" => new lang_string('contrastbg', 'local_accessibilitytool'),
        "br" => new lang_string('contrastbr', 'local_accessibilitytool'),
        "bw" => new lang_string('contrastbw', 'local_accessibilitytool'),
        "by" => new lang_string('contrastby', 'local_accessibilitytool'),
        "gb" => new lang_string('contrastgb', 'local_accessibilitytool'),
        "wg" => new lang_string('contrastwg', 'local_accessibilitytool'),
        "yb" => new lang_string('contrastyb', 'local_accessibilitytool'),
    ];

    $name = new lang_string('colourscheme', 'local_accessibilitytool');
    $description = new lang_string('colourscheme_help', 'local_accessibilitytool');
    $default = array_keys($options);
    $settings->add(new admin_setting_configmultiselect('local_accessibilitytool/contrast',
        $name, $description, $default, $options
    ));

    $options = [
        "classic" => new lang_string('fontclassic', 'local_accessibilitytool'),
        "comic" => new lang_string('fontcomic', 'local_accessibilitytool'),
        "modern" => new lang_string('fontmodern', 'local_accessibilitytool'),
        "mono" => new lang_string('fontmono', 'local_accessibilitytool'),
        "opendyslexic" => new lang_string('fontopendyslexic', 'local_accessibilitytool'),
    ];

    $name = new lang_string('fontstyle', 'local_accessibilitytool');
    $description = new lang_string('fontstyle_help', 'local_accessibilitytool');
    $default = array_keys($options);
    $settings->add(new admin_setting_configmultiselect('local_accessibilitytool/fontstyle',
        $name, $description, $default, $options
    ));

    $name = new lang_string('flattengridformat', 'local_accessibilitytool');
    $description = new lang_string('flattengridformat_help', 'local_accessibilitytool');
    $default = 0;
    $settings->add(new admin_setting_configcheckbox('local_accessibilitytool/flattengridformat',
        $name, $description, $default));
}
