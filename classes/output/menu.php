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
 * Menu rendererable page.
 * @package   local_accessibilitytool
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2018 University of Chichester {@link www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_accessibilitytool\output;

use stdClass;
use renderable;
use templatable;
use renderer_base;

defined('MOODLE_INTERNAL') || die();

/**
 * Menu class.
 **/
class menu implements renderable, templatable {
    /** @var stdClass $data Template object. */
    protected $data;

    /** @var array $contrast_settings List of valid contrast settings. */
    private $contrast_settings = ["default", "yb", "by", "wg", "br", "bb", "bw", "gb"];

    /** @var array $binary_settings List of valid binary settings. */
    private $binary_settings = [0, 1];

    /** @var array $font_settings List of valid font settings. */
    private $font_settings = ["default", "modern", "classic", "comic", "mono"];

    /** @var array $size_settings List of valid font size settings. */
    private $size_settings = ["default", "large", "huge", "massive", "gigantic"];

    /**
     * Construct this renderable.
     *
     * @param \local_accessibilitytool\menu $data
     */
    public function __construct($data = null) {
        $this->data = new stdClass();
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param renderer_base $output
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {
        global $OUTPUT;
        $plugin_settings = get_config("local_accessibilitytool");
        $data = new stdClass();
        // Contrast
        $contrast = get_user_preferences("accessibilitytool_contrast", "default");
        $this->data->contrast = [];
        foreach ($this->contrast_settings as $setting) {
            $icon = ($setting !== $contrast) ? "fa-low-vision" : "fa-eye";
            $item = new stdClass();
            $item->key = "contrast";
            $item->value = $setting;
            $item->icon = $icon;
            $item->selected = ($setting == $contrast);
            $item->text = get_string("contrast" . $setting, "local_accessibilitytool");
            $this->data->contrast[] = $item;
        }

        $stripstyles = get_user_preferences("accessibilitytool_stripstyles", 0);
        $this->data->stripstyles = [];
        $item = new stdClass();
        $item->key = "stripstyles";
        $item->value = 1;
        $item->icon = "fa-plus-square";
        $item->text = get_string("stripstyleson", "local_accessibilitytool");
        if ($stripstyles) {
            $item->value = 0;
            $item->icon = "fa-minus-square";
            $item->text = get_string("stripstylesoff", "local_accessibilitytool");
        }
        $this->data->stripstyles[] = $item;

        $font = get_user_preferences("accessibilitytool_font", "default");
        $this->data->font = [];
        foreach ($this->font_settings as $setting) {
            $selected = ($setting == $font);
            $item = new stdClass();
            $item->key = "font";
            $item->value = $setting;
            $item->icon = "fa-font";
            $item->text = get_string("font" . $setting, "local_accessibilitytool");
            $item->selected = $selected;
            $this->data->font[] = $item;
        }

        $bold = get_user_preferences("accessibilitytool_bold", 0);
        $this->data->readability = [];
        $item = new stdClass();
        $item->key = "bold";
        $item->value = 1;
        $item->icon = "fa-bold";
        $item->text = get_string("boldon", "local_accessibilitytool");
        $item->selected = false;
        if ($bold == 1) {
            $item->value = 0;
            $item->selected = true;
        }
        $this->data->readability[] = $item;

        $spacing = get_user_preferences("accessibilitytool_spacing", 0);
        $item = new stdClass();
        $item->key = "spacing";
        $item->value = 1;
        $item->icon = "fa-align-justify";
        $item->text = get_string("spacingon", "local_accessibilitytool");
        $item->selected = false;
        if ($spacing == 1) {
            $item->value = 0;
            $item->selected = true;
        }
        $this->data->readability[] = $item;

        $size = get_user_preferences("accessibilitytool_size", "default");
        $this->data->size = [];
        foreach ($this->size_settings as $setting) {
            $selected = ($setting == $size);
            $item = new stdClass();
            $item->key = "size";
            $item->value = $setting;
            $item->icon = "fa-text-height";
            $item->text = get_string("size" . $setting, "local_accessibilitytool");
            $item->selected = $selected;
            $this->data->size[] = $item;
        }
        if (isset($plugin_settings->readtome_enabled)) {
            $this->data->readtome_enabled = $plugin_settings->readtome_enabled;
        }

        $gridformat = get_user_preferences("accessibilitytool_gridformat", 0);
        $item = new stdClass();
        $item->key = "gridformat";
        $item->value = 1;
        $item->icon = "fa-columns"; //table
        $item->text = get_string("gridformaton", "local_accessibilitytool");
        $item->help = $OUTPUT->help_icon("gridformat", "local_accessibilitytool");
        $item->selected = false;
        if ($gridformat == 1) {
            $item->value = 0;
            $item->selected = true;
        }
        $this->data->readability[] = $item;

        return $this->data;
    }

    /**
     * Sets appropriate user preference, if valid.
     *
     * @param string $key Preference name.
     * @param string $value The value to be set.
     */
    public function set_user_preference($key, $value) {
        switch ($key) {
            case "contrast":
                if (!in_array($value, $this->contrast_settings)) {
                    return false;
                }
                break;
            case "stripstyles":
            case "bold":
            case "spacing":
            case "readtome":
            case "gridformat":
                if (!in_array($value, $this->binary_settings)) {
                    return false;
                }
                break;
            case "font":
                if (!in_array($value, $this->font_settings)) {
                    return false;
                }
                break;
            case "size":
                if (!in_array($value, $this->size_settings)) {
                    return false;
                }
                break;
            default:
                return false;
        }
        if ($value != "default" || $value != 0) {
            set_user_preference("accessibilitytool_" . $key, $value);
        } else {
            unset_user_preference("accessibilitytool_" . $key);
        }

    }
}
