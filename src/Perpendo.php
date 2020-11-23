<?php

namespace Perpendo;

class Perpendo {

    /**
     * Private static variables
     *
     * @var string
     */
    private static $instance;

    /**
     * Points the class, singleton.
     *
     * @access public
     * @since  1.0.0
     */
    public static function getInstance() {
        if($this->instance === null) $this->instance = new self();
        return $this->instance;
    }

}

?>