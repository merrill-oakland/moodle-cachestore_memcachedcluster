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
 * Cache memcached cluster store version information.
 *
 * @package    cachestore_memcachedcluster
 * @copyright  2013 Eric Merrill
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version = 2014050100;    // The current module version (Date: YYYYMMDDXX)
$plugin->requires = 2013050100;    // Requires this Moodle version.
$plugin->component = 'cachestore_memcachedcluster';  // Full name of the plugin.
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '2.7.0';

$plugin->dependencies = array(
    'cachestore_memcached' => 2013050100,
);
