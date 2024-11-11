<?php
// phpcs:ignoreFile
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
 * Allows overriding grid format renderer by accessibilitytool. Add this to your theme's classes dir.
 *
 * @package   theme_yourtheme
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link https://www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if (file_exists($CFG->dirroot . "/local/accessibilitytool/classes/format_grid_renderer.php")) :
    require_once($CFG->dirroot . "/local/accessibilitytool/classes/format_grid_renderer.php");
    /**
     *  Override format_grid. Change classname to match your theme.
     */
    class theme_yourtheme_format_grid_renderer extends local_accessibilitytool_format_grid_renderer {

    }
endif;
