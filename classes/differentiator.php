<?php

namespace local_differentiator;

defined('MOODLE_INTERNAL') || die();

class differentiator {
    /** @var int */
    private $instance;

    /** @var \stdClass */
    private $coursemodule;

    /** @var \context_module */
    private $context;

    /** @var \stdClass|null  */
    private $settings = null;

    public function __construct(\cm_info $coursemodule) {
        if ($coursemodule->modname !== 'differentiator') {
            throw new \moodle_exception('wrong_cm_info_given', 'differentiator');
        }
        $this->instance = $coursemodule->instance;
        $this->coursemodule = $coursemodule;
        $this->context = $coursemodule->context;
    }

    /**
     * Get differentiator instance id.
     *
     * @return int
     */
    public function get_id() : int {
        return $this->instance;
    }

    public function get_context() : \context_module {
        return $this->context;
    }

    public function get_coursemodule() {
        return $this->coursemodule;
    }

    public function get_settings() {
        if ($this->settings === null) {
            global $DB;
            $settings = $DB->get_record('differentiator', ['id' => $this->instance], '*', MUST_EXIST);

            $this->settings = new \stdClass();
            $this->settings->name = $settings->name;
        }

        return $this->settings;
    }

    public function make_url(string $subpath, array $params = null) : \moodle_url {
        $path = '/mod/differentiator/view.php/' . $this->coursemodule->id . '/' . $subpath;
        return new \moodle_url($path, $params);
    }

    public function user_has_capability(string $capability) : bool {
        return \has_capability($capability, $this->context);
    }

    public function require_user_has_capability(string $capability) {
        \require_capability($capability, $this->context);
    }
}
