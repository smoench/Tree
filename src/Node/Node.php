<?php

/**
 * Copyright (c) 2013-2024 Nicolò Martini
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/nicmart/Tree
 */

namespace Tree\Node;

/**
 * @template TValue
 * @template-implements NodeInterface<TValue>
 */
class Node implements NodeInterface
{
    /** @use NodeTrait<TValue> */
    use NodeTrait;

    /**
     * @param TValue|null $value
     * @param array<int, NodeInterface> $children
     */
    public function __construct(
        $value = null,
        array $children = [],
    ) {
        $this->setValue($value);

        if ([] === $children) {
            return;
        }

        $this->setChildren($children);
    }
}
