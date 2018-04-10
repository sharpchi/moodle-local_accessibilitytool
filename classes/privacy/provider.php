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
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_accessibilitytool\privacy;
use \core_privacy\local\metadata\collection;
use \core_privacy\local\request\writer;

defined('MOODLE_INTERNAL') || die();

class provider implements \core_privacy\local\metadata\provider,
    \core_privacy\local\request\user_preference_provider {

    public static function get_metadata(collection $collection) : collection {
        $collection->add_user_preference('accessibilitytool_contrast',
            'privacy:metadata:preference:contrast');
        $collection->add_user_preference('accessibilitytool_stripstyles',
            'privacy:metadata:preference:stripstyles');
        $collection->add_user_preference('accessibilitytool_font',
            'privacy:metadata:preference:font');
        $collection->add_user_preference('accessibilitytool_bold',
            'privacy:metadata:preference:bold');
        $collection->add_user_preference('accessibilitytool_spacing',
            'privacy:metadata:preference:spacing');
        $collection->add_user_preference('accessibilitytool_size',
            'privacy:metadata:preference:size');
        $collection->add_user_preference('accessibilitytool_readtome',
            'privacy:metadata:preference:readtome');
        return $collection;
    }

    public static function export_user_preferences(int $userid) {
        $preferences = get_user_preferences();
        $accessibilitytool_params = [
            "accessibilitytool_contrast",
            "accessibilitytool_stripstyles",
            "accessibilitytool_font",
            "accessibilitytool_bold",
            "accessibilitytool_spacing",
            "accessibilitytool_size",
            "accessibilitytool_readtome"];
        foreach ($preferences as $name => $value) {
            $descriptionidentifier = null;
            if (in_array($name, $accessibilitytool_params)) {
                $param_name = str_replace("accessibilitytool_", "", $name);
                $descriptionidentifier = "privacy:request:preference:" . $param_name;
                $v = ($value === 1) ? "on" : $value;
                $selected_value = get_string($param_name . $v, "local_accessibilitytool");
                writer::export_user_preference(
                    "local_accessibilitytool",
                    $name,
                    $value,
                    get_string($descriptionidentifier,
                        "local_accessibilitytool",
                        (object) [
                            "value" => $v
                        ]
                    )
                );
            }
        }

    }

}
