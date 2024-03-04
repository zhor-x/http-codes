<?php

namespace ZhorX\StatusCode\Exceptions;

use Error;

final class UndefinedError extends Error
{

    public function __construct(string $enum, string $case)
    {
        parent::__construct(
            message: "Constant $enum::$case does not exist.",
        );
    }
}