<?php

declare(strict_types=1);

require_once 'lib/functions.php';

/**
 * Require functionality in filter only if WordPress is loaded.
 */
if (function_exists('add_filter')) {
    require_once 'lib/twig.php';
}
