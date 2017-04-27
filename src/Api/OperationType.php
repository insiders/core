<?php

declare(strict_types=1);
/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiPlatform\Core\Api;

final class OperationType
{
    const ITEM = 'item';
    const COLLECTION = 'collection';
    const SUBRESOURCE = 'subresource';
    const TYPES = [self::ITEM, self::COLLECTION, self::SUBRESOURCE];
}
