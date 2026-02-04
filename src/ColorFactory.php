<?php

namespace alcamo\color;

use OzdemirBurak\Iris\BaseColor;

/**
 * @namespace alcamo::color
 *
 * @brief Color manipulation
 */

/**
 * @brief Color factory methods
 *
 * @date Last reviewed 2026-02-04
 */
class ColorFactory
{
    /**
     * @brief Create color shades in HSV space
     *
     * @return Array of $count colors of the same type as $color1, evenly
     * distributed in the HSV space between the two given colors, including
     * $color1 and $color2.
     */
    public function createShadesInHsv(
        BaseColor $color1,
        BaseColor $color2,
        int $count
    ): array {
        $shades = [ $color1 ];

        for ($i = 1; $i < $count - 1; $i++) {
            $shades[] = (clone $color1)
                ->mixInHsv($color2, $i / ($count - 1) * 100 + .5);
        }

        $shades[] = $color2;

        return $shades;
    }
}
