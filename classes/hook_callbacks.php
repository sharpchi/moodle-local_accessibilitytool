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

namespace local_accessibilitytool;

use core_user\hook\extend_user_menu;
use stdClass;

/**
 * Class hook_callbacks
 *
 * @package    local_accessibilitytool
 * @copyright  2024 Southampton Solent University {@link https://www.solent.ac.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {
    /**
     * Extend user menu with accessibility tool.
     *
     * @param extend_user_menu $hook
     * @return void
     */
    public static function extend_user_menu(extend_user_menu $hook): void {
        $enabled = get_config('local_accessibilitytool', 'enable');
        if (!$enabled) {
            return;
        }
        $item = new stdClass();
        $item->itemtype = 'link';
        $item->title = get_string('accessibilitytool', 'local_accessibilitytool');
        $item->url = new \core\url('/local/accessibilitytool/manage.php');
        $item->pix = 'e/accessibility_checker';
        $hook->add_navitem($item);
    }
}
