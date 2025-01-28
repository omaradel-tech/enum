<?php

namespace omaradel\Enum\Enums;

use omaradel\Enum\Supports\Enum;

class BaseStatusEnum extends Enum
{
    const DRAFT = 'Draft';
    const PENDING = 'Pending';
    const PUBLISH = 'Published';
}