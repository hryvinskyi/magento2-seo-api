<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoApi\Api;

interface CheckPatternInterface
{
    /**
     * @param string $string
     * @param string $pattern
     * @param bool $caseSensitive
     *
     * @return string
     */
    public function execute(string $string, string $pattern, bool $caseSensitive = false): bool;
}
