<?php

namespace Rhumsaa\Uuid\Converter;

interface NumberConverterInterface
{
    public function fromHex($hex);

    public function toHex($integer);
}
