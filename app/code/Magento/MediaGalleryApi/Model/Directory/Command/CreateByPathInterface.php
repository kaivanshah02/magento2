<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaGalleryApi\Model\Directory\Command;

/**
 * Create folder by provided path
 * @api
 */
interface CreateByPathInterface
{
    /**
     * Create new directory by provided path
     *
     * @param string $path
     * @param string $name
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function execute(string $path, string $name): void;
}
