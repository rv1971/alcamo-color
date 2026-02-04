<?php

namespace alcamo\color;

use PHPUnit\Framework\TestCase;
use OzdemirBurak\Iris\Color\{Hex, Hsv, Rgb};

class ColorFactoryTest extends TestCase
{
    /**
     * @dataProvider createShadesInHsvProvider
     */
    public function testCreateShadesInHsv($c1, $c2, $count, $expected): void
    {
        $colorFactory = new ColorFactory();

        $this->assertEquals(
            $expected,
            $colorFactory->createShadesInHsv($c1, $c2, $count)
        );
    }

    public function createShadesInHsvProvider(): array
    {
        return [
            'hsv' => [
                new Hsv('0, 100, 90'),
                new Hsv('60, 40, 0'),
                4,
                [
                    new Hsv('0, 100, 90'),
                    new Hsv('20, 80, 60'),
                    new Hsv('40, 60, 30'),
                    new Hsv('60, 40, 0')
                ]
            ],
            'hex' => [
                new Hex('#808080'),
                new Hex('#000000'),
                3,
                [
                    new Hex('#808080'),
                    new Hex('#404040'),
                    new Hex('#000000')
                ]
            ],
        ];
    }
}
