<?php

echo <<<HTML

In the study guide is shown the bitwise operators which makes me recover years ago contents of technical course I did.

I never dealt very well with conversions (binary, hex, base 10...) and this topic left me uncomfortable.
This is the reason I've decided to study harder this topic.

HTML;


echo <<<HTML

-- AND

6 & 5: 4
ok, but what?

6 in binary: 00000110
5 in binary: 00000101
result: the binary which is common for 6 and 5 is the 4.

HTML;

echo <<<HTML

-- OR

6 | 5: 7
and the reason...

6 in binary: 00000110
5 in binary: 00000101
result

1 is present in the first position of the number 5
1 is present in the second position of the number 6 (that represents the amount 2), now the total is 3.
1 is present at both sides at third position (that represents the amount 4), but how we are treating the OR condition, we just consider one of them, so, we add 4 and we have the total of 7.

HTML;

echo <<<HTML
-- SHIFT

-- -- Shift Right
4 >> 2: 1
???

4 in binary: 00000100
In this case we are moving the "1" for 2 positions TO RIGHT side
result after move: 00000001

-- -- Shift Left
4 << 2: 16
???

4 in binary: 00000100
In this case we are moving the "1" for 2 positions TO LEFT side
result after move: 00010000

HTML;

echo <<<HTML

As I said, I've learned this about 10 years ago and don't remember when I've used these concepts in some real problem
in web development. I've used these concepts a lot when I worked with on-board software, but in web world, I think I've used these
for a 2 or 3 times during the past 10 years.

HTML;
