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

defined('MOODLE_INTERNAL') || die();


$string['accessibilitytool'] = "Accessibility Tool";
$string['accessibilitytools'] = "Accessibility Tools";
$string['accessibilitytoolpreferences'] = "Accessibility tool preferences";
$string['pluginname'] = "Accessibility Tool";
$string['return'] = "Return";
$string['returnhelp'] = "Return to the page you were looking at before coming here";

/* Colour scheme */
$string['colourscheme'] = "Colour Scheme";
$string['contrastdefault'] = "Default Moodle theme";
$string['contrastyb'] = "Yellow on Black theme";
$string['contrastby'] = "Black on Yellow theme";
$string['contrastwg'] = "White on Grey theme";
$string['contrastbr'] = "Black on Red theme";
$string['contrastbb'] = "Black on Blue theme";
$string['contrastbw'] = "Black on White theme";
$string['contrastgb'] = "Green on Black theme";
$string['stripstyleson'] = "Apply theme to all content";
$string['stripstylesoff'] = "Don't apply theme to all content";

/* Font style */
$string['fontstyle'] = "Font Style";
$string['fontdefault'] = "Default font";
$string['fontmodern'] = "Modern font";
$string['fontclassic'] = "Classic font";
$string['fontcomic'] = "Comic Font";
$string['fontmono'] = "Monospace font";

/* Readability */
$string['readability'] = "Readability";
$string['boldon'] = "Always use bold font weight";
$string['boldoff'] = "Use normal font weight";
$string['spacingon'] = "More space between lines";
$string['spacingoff'] = "Normal line spacing";

/* Textsize */
$string['textsize'] = "Text size";
$string['sizedefault'] = "Default text size";
$string['sizelarge'] = "Large text size";
$string['sizehuge'] = "Huge text size";
$string['sizemassive'] = "Massive text size";
$string['sizegigantic'] = "Gigantic text size";

/* Readtome */
$string['readtome'] = "Read to Me";
$string['readtomeon'] = "Turn on Read-to-Me";
$string['readtomeoff'] = "Turn off Read-to-Me";
$string['readtomealert'] = "Read To Me doesn't work in Internet Explorer because it doesn't support Text To Speech." .
            " We recommend you use Google Chrome or Firefox instead if you want to use Read To Me.";

/* Gridformat */
$string['gridformat'] = "Flatten gridformat";
$string['gridformaton'] = "Flatten gridformat layout";
$string['gridformatoff'] = "Use gridformat layout normally";
$string['gridformat_help'] = "Some courses use gridformat to enhance the visual user experience. " .
    "This, however, causes issues for screenreaders. If you're using a screenreader, please switch on this setting.";

/* Privacy */
$string["privacy:metadata:preference:contrast"] = "The contrast theme selected by the user.";
$string["privacy:metadata:preference:stripstyles"] = "Whether the user wants to strip all inline styling.";
$string["privacy:metadata:preference:font"] = "The font face selected by the user.";
$string["privacy:metadata:preference:bold"] = "The boldness of text selected by the user.";
$string["privacy:metadata:preference:spacing"] = "The spacing between lines selected by the user.";
$string["privacy:metadata:preference:size"] = "The text size selected by the user.";
$string["privacy:metadata:preference:readtome"] = "The read-to-me setting selected by the user.";
$string["privacy:metadata:preference:gridformat"] = 'The Flatten Gridformat settting selected by the user.';
$string["privacy:request:preference:contrast"] = 'Contrast set to use: {$a->value}';
$string["privacy:request:preference:stripstyles"] = 'Stripstyles set to use: {$a->value}';
$string["privacy:request:preference:font"] = 'Font set to use: {$a->value}';
$string["privacy:request:preference:bold"] = 'Bold set to: {$a->value}';
$string["privacy:request:preference:spacing"] = 'Spacing set to use: {$a->value}';
$string["privacy:request:preference:size"] = 'Text set to use: {$a->value}';
$string["privacy:request:preference:readtome"] = 'Readtome set to use: {$a->value}';
$string["privacy:request:preference:gridformat"] = 'Flatten Gridformat set to use: {$a->value}';
