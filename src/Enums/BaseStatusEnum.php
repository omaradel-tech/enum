<?php

namespace omaradel\Enum\Enums;

use omaradel\Enum\Supports\Enum;

class BaseStatusEnum extends Enum
{
    const DRAFT = 'draft';
    const PENDING = 'pending';
    const PUBLISH = 'published';
}