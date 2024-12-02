<?php

namespace TecnoSpeed\Plugnotas\Traits;

use Exception;
use FerFabricio\Hydrator\Extract;
use FerFabricio\Hydrator\Hydrate;
use TecnoSpeed\Plugnotas\Error\InvalidTypeError;

trait DataTransform
{
    /**
     * @throws Exception
     */
    public function toArray($excludeNull = true): array
    {
        return Extract::toArray($this, $excludeNull);
    }

    /**
     * @throws InvalidTypeError
     */
    public static function fromArray($data)
    {
        if (is_array($data)) {
            return Hydrate::toObject(static::class, $data);
        }

        if (is_object($data) && get_class($data) === static::class) {
            return $data;
        }

        throw new InvalidTypeError('Deve ser informado um array.');
    }
}
