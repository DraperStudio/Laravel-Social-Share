<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\SocialShare\Services;

class GooglePlus extends Service
{
    public static function getUrl()
    {
        return 'https://plus.google.com/share?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url' => $link,
        ];
    }
}
