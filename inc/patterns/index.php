<?php
/**
 * Loads all block pattern files.
 */

foreach (glob(__DIR__ . '/*.php') as $pattern_file) {
    if (basename($pattern_file) !== 'index.php') {
        require_once $pattern_file;
    }
}
