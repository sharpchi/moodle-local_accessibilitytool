# moodle-local_accessibilitytool

This is a local plugin that adds accessibility features to your Moodle site.
It adds an "Accessibility Tool" link to the user menu which takes the user to a preferences page where they can control:

- Colour Scheme
- Font style
- Font weight
- Font size
- Line spacing

This plugin has a dependencies on Boost, and requires a call from your own theme (see below).

## Installing

1. Drop code into /local/accessibilitytool
2. Go to Site administration -> Notifications to install
3. Add the following to *your* theme's lib.php file.

```php
function theme_yourthemename_page_init(moodle_page $page) {
    global $CFG;
    if (file_exists($CFG->dirroot . "/local/accessibilitytool/lib.php")) {
        require_once($CFG->dirroot . "/local/accessibilitytool/lib.php");
        local_accessibilitytool_page_init($page);
    }
}
```

4. If you are using Grid Format you can optionally copy the following to your theme's `classes` folder (`classes/format_grid_renderer.php`).

```php
if (file_exists($CFG->dirroot . "/local/accessibilitytool/classes/format_grid_renderer.php")) :
    require_once($CFG->dirroot . "/local/accessibilitytool/classes/format_grid_renderer.php");
    class theme_yourtheme_format_grid_renderer extends local_accessibilitytool_format_grid_renderer {

    }
endif;
```

### Theme developers

Include the above function in your theme to have this plugin automatically supported once it is installed.

## Developers

If you wish to contribute to this project, it should be noted that the CSS that is shipped is compiled from SASS files (see sass folder).

In order to compile these files you will need to install nodejs on your development machine. Once you have done this, you will need to run the following command in the local\accessibilitytool directory:

` $ npm install`

This will install all the components you require. To compile the SASS files you can run the following command:

` $ gulp`

While this is running, whenever you save a SASS file, the new style sheet will be compiled.

## Credits

The plugin is largely based on the excellent presentation made at Moodle MootIEUK18 by
Alex Walker ([Github](https://github.com/lexxkoto) & [Twitter](https://twitter.com/lexx_koto)) of the University of Glasgow.

The original version was strongly tied into their theme, whereas this version is more-or-less stand-alone - requiring a small change to your theme's lib.php file.

## Contributers

- [Michael Milette](https://github.com/michael-milette)
