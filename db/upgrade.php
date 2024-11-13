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
 * Upgrade steps for Accessibility Tool
 *
 * Documentation: {@link https://moodledev.io/docs/guides/upgrade}
 *
 * @package    local_accessibilitytool
 * @category   upgrade
 * @copyright  2024 Southampton Solent University {@link https://www.solent.ac.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Execute the plugin upgrade steps from the given old version.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_local_accessibilitytool_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();
    if ($oldversion < 2024111200) {
        $menu = get_config("core", 'customusermenuitems');
        $menuitems = explode("\n", $menu);
        foreach ($menuitems as $key => $item) {
            if (strpos($item, "accessibilitytool,local_accessibilitytool") !== false) {
                unset($menuitems[$key]);
            }
        }
        $menu = implode("\n", $menuitems);
        set_config('customusermenuitems', $menu);
        upgrade_plugin_savepoint(true, 2024111200, 'local', 'accessibilitytool');
    }

    return true;
}
