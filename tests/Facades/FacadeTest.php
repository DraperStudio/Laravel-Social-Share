<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\SocialShare\Facades;

use BrianFaust\SocialShare\Share;
use BrianFaust\Tests\SocialShare\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'social-share';
    }

    protected function getFacadeClass()
    {
        return \BrianFaust\SocialShare\Facades\SocialShare::class;
    }

    protected function getFacadeRoot()
    {
        return Share::class;
    }
}
