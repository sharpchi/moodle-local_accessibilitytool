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
 * Language strings for local_accessibilitytool
 *
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link https://www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<h3>About accessibility tool</h3>
    <p>This tool has been designed to help you personalise Moodle\'s appearance to make it easier for you to use Moodle.</p>';
$string['about_colourscheme'] = '<h4>Colour scheme</h4>
    <p>The purpose of the colour schemes is to provide a distraction free environment that is easy on the eyes.
    All of the colour schemes have been tested for contrast and pass the <a href="https://webaim.org/resources/contrastchecker/" title="Link to WebAIM contrast checker">WCAG AAA contrast ratio</a>.</p>
    <p>Links and buttons will invert the colour scheme when hovered over: <a href="#" title="Test link">Test link</a> <button class="btn btn-primary">Test button</button></p>
    <p>When you\'re using one of these schemes, you will find some background images do not appear.
    This is part of creating a distraction free environment.</p>';
$string['about_features'] = '<h4>Features</h4>';
$string['about_features_gridformat'] = '<h5>Grid format</h5>
    <p>Teachers can choose different ways to organise a layout of their course. One of those is what\'s know as Grid Format (a series of tiles
    which link to each section of your course).</p>
    <p>We have found that some screenreaders have difficulty reading the pop-up window, so selecting "Flatten Grid Format" the page will behave
    as if it didn\'t have Grid Format.</p>';
$string['about_fonts'] = '<h4>Font styles</h4>
    <p>Research into Dyslexia has found that some fonts are harder to read than others.
    The reasons for this boil down to typeface complexity or lack of distinctiveness between characters. The general recommendation is to use a sans-serif font.</p>
    <p>In the end there is a degree of preference, so we have made a number of fonts available to you to use.</p>';
$string['about_fonts_classic'] = '<h5>Classic font</h5>
    <p>Classic font is a serif font, and though it\'s not generally regarded as an accessible font, it\'s included for those who want it.</p>';
$string['about_fonts_comic'] = '<h5>Comic sans</h5>
    <p>Opinion is mixed about Comic\'s readability for those with Dyslexia. It is still popular, and some find it easier to read.</p>';
$string['about_fonts_default'] = '<h5>Default font</h5>
    <p>Moodle\'s default font is a sans-serif font, so this should generally be readable from the outset.</p>';
$string['about_fonts_modern'] = '<h5>Modern</h5>
    <p>Modern is a sans-serif font, depending on your operating system, it will be one of: "Helvetica Neue", "Helvetica", "Arial" or sans-serif.</p>';
$string['about_fonts_mono'] = '<h5>Monospace</h5>
    <p>Monospace font characters are all the same size. This helps to create a larger gap between letters where they might otherwise blend into a single shape.</p>';
$string['about_fonts_opendyslexic'] = '<h5>Open Dyslexic</h5>
    <p>Open Dyslexic was specifically designed with dyslexic readers in mind. The shapes of the characters create a distinctiveness that make
    them easier to read.</p>';
$string['about_readability'] = '<h4>Readability</h4>
    <p>We have included some settings to help manage the readability of Moodle to suit your preferences.</p>
    <p>Making the text bolder may help increase the contrast between the font and background colours.</p>
    <p>Increasing the space between lines may help you scan the page more easily.</p>';
$string['about_readability_stripstyles'] = '<h5>Strip styles</h5>
    <p>Sometimes your teacher might add their own styles to the content, or they copy in some text from another web page that contains extra
    style information.</p>
    <p>By stripping styles you can improve the consistency of the page content.</p>
    <h6>Example</h6>
    <p>The text below has inline styles. Select "Strip inline styles" and the text will be normalised.</p>
    <p><span style="background-color: #567; color: #765">Dark text on a dark background.</span>
    <span style="font-family: \'Zapfino\', \'Segoe Script\', \'Dancing Script\', \'URW Chancery L\', \'msbm10\'; font-size: 28px;">Non-standard font, and incorrect font size.</span></p>';
$string['about_textsize'] = '<h4>Text size</h4>
    <p>You can choose the font size that suits you best.</p>';
$string['accessibilitytool'] = "Accessibility Tool";
$string['accessibilitytoolpreferences'] = "Accessibility tool preferences";
$string['accessibilitytools'] = "Accessibility Tools";

$string['boldoff'] = "Use normal font weight";
$string['boldon'] = "Always use bold font weight";

$string['colourscheme'] = "Colour scheme";
$string['colourscheme_help'] = "Choose which colours are available to your users.";
$string['contrastbb'] = "Black on Blue theme";
$string['contrastbg'] = "Black on Green theme";
$string['contrastbr'] = "Black on Red theme";
$string['contrastbw'] = "Black on White theme";
$string['contrastby'] = "Black on Yellow theme";
$string['contrastdefault'] = "Default Moodle theme";
$string['contrastgb'] = "Green on Black theme";
$string['contrastwg'] = "White on Grey theme";
$string['contrastyb'] = "Yellow on Black theme";

$string['enable'] = 'Enable';

$string['features'] = 'Features';
$string['flattengridformat'] = "Flatten Grid Format";
$string['flattengridformat_help'] = "If you don't have Grid Format in your Moodle, leave this disabled.";
$string['fontclassic'] = "Classic font";
$string['fontcomic'] = "Comic font";
$string['fontdefault'] = "Default font";
$string['fontmodern'] = "Modern font";
$string['fontmono'] = "Monospace font";
$string['fontopendyslexic'] = "Open Dyslexic";
$string['fontstyle'] = "Font style";
$string['fontstyle_help'] = "Choose which fonts are available to your users.";

$string['gridformat'] = "Flatten Grid Format";
$string['gridformat_help'] = "Some courses use gridformat to enhance the visual user experience. " .
    "This, however, causes issues for screenreaders. If you're using a screenreader, please switch on this setting.";
$string['gridformatoff'] = "Use Grid Format layout normally";
$string['gridformaton'] = "Flatten Grid Format layout";

$string['pluginname'] = "Accessibility Tool";
$string["privacy:metadata:preference:bold"] = "The boldness of text selected by the user.";
$string["privacy:metadata:preference:contrast"] = "The contrast theme selected by the user.";
$string["privacy:metadata:preference:font"] = "The font face selected by the user.";
$string["privacy:metadata:preference:gridformat"] = 'The Flatten Gridformat settting selected by the user.';
$string["privacy:metadata:preference:readtome"] = "The read-to-me setting selected by the user.";
$string["privacy:metadata:preference:size"] = "The text size selected by the user.";
$string["privacy:metadata:preference:spacing"] = "The spacing between lines selected by the user.";
$string["privacy:metadata:preference:stripstyles"] = "Whether the user wants to strip all inline styling.";
$string["privacy:request:preference:bold"] = 'Bold set to: {$a->value}';
$string["privacy:request:preference:contrast"] = 'Contrast set to use: {$a->value}';
$string["privacy:request:preference:font"] = 'Font set to use: {$a->value}';
$string["privacy:request:preference:gridformat"] = 'Flatten Gridformat set to use: {$a->value}';
$string["privacy:request:preference:readtome"] = 'Readtome set to use: {$a->value}';
$string["privacy:request:preference:size"] = 'Text set to use: {$a->value}';
$string["privacy:request:preference:spacing"] = 'Spacing set to use: {$a->value}';
$string["privacy:request:preference:stripstyles"] = 'Stripstyles set to use: {$a->value}';

$string['readability'] = "Readability";
$string['readtome'] = "Read to Me";
$string['readtome_help'] = "Read to Me is built into modern browsers that reads text on the page.";
$string['readtomealert'] = "Read To Me doesn't work in Internet Explorer because it doesn't support Text To Speech." .
    " We recommend you use Google Chrome or Firefox instead if you want to use Read To Me.";
$string['readtomeoff'] = "Turn off Read-to-Me";
$string['readtomeon'] = "Turn on Read-to-Me";
$string['return'] = "Return";
$string['returnhelp'] = "Return to the page you were looking at before coming here";

$string['sizedefault'] = "Default text size";
$string['sizegigantic'] = "Gigantic text size";
$string['sizehuge'] = "Huge text size";
$string['sizelarge'] = "Large text size";
$string['sizemassive'] = "Massive text size";
$string['spacingoff'] = "Normal line spacing";
$string['spacingon'] = "More space between lines";
$string['stripstylesoff'] = "Leave inline styles in place";
$string['stripstyleson'] = "Strip inline styles";

$string['textsize'] = "Text size";
