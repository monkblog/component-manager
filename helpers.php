<?php

use MonkBlog\Component\Contracts\Manager;

if (! function_exists('component_manager')) {
    /**
     * @return \MonkBlog\Component\Contracts\Manager
     */
    function component_manager()
    {
        return app(Manager::class);
    }
}
