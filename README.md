# Usage example

~~~
use alcamo\color\ColorFactory;
use OzdemirBurak\Iris\Color\Hsv;

$colorFactory = new ColorFactory();

$shades = $colorFactory->createShadesInHsv(
    new Hsv('0, 100, 90'),
    new Hsv('60, 40, 0'),
    4
);
~~~

Now $shades contains an array of four Hsv objects evenly distributed
between the first and the second given color (both included), i.e.

~~~
[
    new Hsv('0, 100, 90'),
    new Hsv('20, 80, 60'),
    new Hsv('40, 60, 30'),
    new Hsv('60, 40, 0')
]
~~~

# Provided classes

* `ColorFactory` currently consist of the method `createShadesInHsv()`.
* `Tango` contains constants representing the 
  [Tango color palette](https://en.wikipedia.org/wiki/Tango_Desktop_Project#Palette).

See the doxygen documentation for details.
