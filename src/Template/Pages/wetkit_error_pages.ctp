<?php
use Cake\Core\Configure;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$markdown = $this->helpers()->load('WetKit.Markdown');
echo $markdown->text(
<<<'MD'

# Error Pages Setup

Because of how CakePHP traps and handles errors it may occurs before the theme is applied. In this case the
templates from your application folders will be used.

To make sure the WET template is used when showing errors copy the following files from the WetKit plugin to
your applications folders.


- `/plugins/WetKit/src/Template/Error/error400.ctp`
- `/plugins/WetKit/src/Template/Error/error500.ctp`
- `/plugins/WetKit/src/Template/Layout/error.ctp`

COPY ABOVE FILES TO:

- `/src/Template/Error/error400.ctp`
- `/src/Template/Error/error500.ctp`
- `/src/Template/Layout/error.ctp`


**Note**: To test if the 400 and 500 error pages are working properly turn the debugging in `/configs/app.php` to false.
MD
);