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
 * @copyright 2018 University of Chichester {@link https://www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Called by theme's page_init function to set classes and load scripts.
 *
 * @param moodle_page $page Main page object.
 * @deprecated 2024111200
 */
function local_accessibilitytool_page_init(moodle_page $page) {
    // This is not longer required, but retained in case theme calls.
    return;
}

/**
 * Get icon mapping for font-awesome.
 */
function local_accessibilitytool_get_fontawesome_icon_map() {
    return [
        'core:t/../e/accessibility_checker' => 'fa-universal-access',
    ];
}

/**
 * This function extends the user preferences navigation with Accessibility tool preferences.
 *
 * @param navigation_node $useraccount  The navigation node to extend
 * @param stdClass        $user        The user object
 * @param context_user    $usercontext The context of the user
 * @param stdClass        $course      The course to object for the tool
 * @param context_course  $coursecontext     The context of the course
 */
function local_accessibilitytool_extend_navigation_user_settings(navigation_node $useraccount,
                                                                stdClass $user,
                                                                context_user $usercontext,
                                                                stdClass $course,
                                                                context_course $coursecontext) {
    global $PAGE;
    // Don't bother doing needless calculations unless we are on the relevant pages.
    $onpreferencepage = $PAGE->url->compare(new moodle_url('/user/preferences.php'), URL_MATCH_BASE);
    if (!$onpreferencepage) {
        return null;
    }

    $parent = $useraccount->parent->find("useraccount",
                                        navigation_node::TYPE_CONTAINER);
    $parent->add(get_string("accessibilitytoolpreferences", "local_accessibilitytool"),
            new moodle_url("/local/accessibilitytool/manage.php"));

}
