<?php

namespace Gentry\Toast;

use Gentry\Gentry;

class Generator extends Gentry\Generator
{
    protected function convertTestNameToFilename(string $name) : string
    {
        return strtolower(str_replace('\\', '_', $name));
    }

    protected function getTemplatePath() : string
    {
        return dirname(__DIR__);
    }
}

