<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\PlatformHttpCacheBundle\Tests\SignalSlot;

use eZ\Publish\Core\SignalSlot\Signal\UserService\UnAssignUserFromUserGroupSignal;
use EzSystems\PlatformHttpCacheBundle\SignalSlot\UnassignUserFromUserGroupSlot;

class UnassignUserFromUserGroupSlotTest extends AbstractContentSlotTest
{
    public function createSignal()
    {
        return new UnAssignUserFromUserGroupSignal(['userId' => $this->contentId, 'userGroupId' => 99]);
    }

    public function generateTags()
    {
        return [
            'c' . $this->contentId,
            'c99',
            'ez-user-context-hash',
            'content-' . $this->contentId,
            'content-99',
        ];
    }

    public function getSlotClass()
    {
        return UnassignUserFromUserGroupSlot::class;
    }

    public function getReceivedSignalClasses()
    {
        return [UnAssignUserFromUserGroupSignal::class];
    }
}
