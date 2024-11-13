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
 * Version file for local_accessibilitytool
 *
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @author    Alex Walker
 * @copyright 2018 University of Glasgow {@link https://www.gla.ac.uk}
 * @copyright 2018 University of Chichester {@link https://www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2024111200;
$plugin->requires = 2024100700;
$plugin->component = "local_accessibilitytool";
$plugin->maturity = MATURITY_STABLE;
$plugin->supported = [405, 500];
