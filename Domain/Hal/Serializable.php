<?php

namespace UnrLab\Hal\Domain\Hal;


interface Serializable
{
    public function preSerialize();
    public function getLinks();
}