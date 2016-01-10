<?php

namespace MonkBlog\Component\Facade;

use Illuminate\Support\Facades\Facade;


class ComponentManager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'MonkBlog\Component\Contracts\Manager';
    }
}
