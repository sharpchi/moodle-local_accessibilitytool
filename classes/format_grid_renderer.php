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
 * Grid_renderer extender - allows disabling Grid format on a user basis. Defaults to topics.
 *
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link https://www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if (file_exists("$CFG->dirroot/course/format/grid/renderer.php")) :
    include_once($CFG->dirroot . "/course/format/grid/renderer.php");

    /**
     * Grid format renderer class.
     */
    class local_accessibilitytool_format_grid_renderer extends format_grid_renderer {

        /**
         * Output the html for a multiple section page
         *
         * @param stdClass $course The course entry from DB
         * @param array $sections The course_sections entries from the DB
         * @param array $mods
         * @param array $modnames
         * @param array $modnamesused
         */
        public function print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused) {
            $atpreference = get_user_preferences('accessibilitytool_gridformat');
            if (!empty($atpreference)) {
                return
                    format_section_renderer_base::print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused);
            }
            return format_grid_renderer::print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused);
        }

        /**
         * Generate the starting container html for a list of sections
         * @return string HTML to output.
         */
        protected function start_section_list() {
            $atpreference = get_user_preferences('accessibilitytool_gridformat');
            if (!empty($atpreference)) {
                return html_writer::start_tag('ul', ['class' => 'topics']);
            }
            return format_grid_renderer::start_section_list();
        }
    }
endif;
