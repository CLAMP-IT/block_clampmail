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
 * Alternate 'added' logging event handler.
 *
 * @package    block_clampmail
 * @copyright  2014 UC Regents
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_clampmail\event;

/**
 * Alternate 'added' logging event handler.
 *
 * @package    block_clampmail
 * @copyright  2014 UC Regents
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class alternate_email_added extends \core\event\base {
    /**
     * Initialize the event.
     */
    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    /**
     * Returns name of the event.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventalternateemailadded', 'block_clampmail');
    }

    /**
     * Returns info on when a user with ID has viwed a control panel module (tab).
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '{$this->userid}' has added an alternate email  "
            . "{$this->other['address']}.";
    }

    /**
     * Returns URL of the event.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/blocks/clampmail/alternate.php', array(
                    'courseid' => $this->courseid,
                ));
    }
}
