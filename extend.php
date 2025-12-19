<?php

namespace wdnb\bbembed;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->MediaEmbed->add(
                'bilibili',
                [
                    'host'    => ['bilibili.com', 'b23.tv'],
                    'extract' => [
                        "!bilibili\.com/video/(?:av(?<aid>\d+)|BV(?<bvid>[a-zA-Z0-9]+))(?:\?p=(?<pn>\d+))?!",
                        "!b23\.tv/(?:av(?<aid>\d+)|BV(?<bvid>[a-zA-Z0-9]+))!"
                    ],
                    'iframe'  => [
                        'width'  => 600,
                        'height' => 400,
                        'src'    => '//player.bilibili.com/player.html?aid={@aid}&bvid={@bvid}&page={@pn|1}&high_quality=1&as_wide=1',
                        'allowfullscreen' => 'true'
                    ]
                ]
            );
        })
];
