<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoApi\Api;

interface GetBaseUrlInterface
{
    /**
     * @return string
     */
    public function execute(): string;
}
