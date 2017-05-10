<?php

namespace UnrLab\Hal\Domain\Hal;


class Link
{
    private $pattern;

    private $route;

    public function __construct($route, $pattern)
    {
        $this->route   = $route;
        $this->pattern = $pattern;
    }

    public function generageLink($id)
    {
        return str_replace($this->pattern, $id, $this->route);
    }
}