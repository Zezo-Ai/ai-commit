<?php

declare(strict_types=1);

/**
 * Copyright (c) 2023-2025 guanguans<ityaozm@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/guanguans/ai-commit
 */

namespace PHPSTORM_META;

use Illuminate\Support\Facades\App;
use Illuminate\Bus\Dispatcher;
use Illuminate\Config\Repository;
use Illuminate\Container\Container as IlluminateContainer;
use Illuminate\Contracts\Container\Container;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Psr\Container\ContainerInterface;

// PhpStorm Meta file, to provide autocomplete information for PhpStorm.
override(new Container(), map([
    '' => '@',
    Dispatcher::class => Dispatcher::class,
    'db' => DatabaseManager::class,
    'view.finder' => FileViewFinder::class,
    'config' => Repository::class,
]));
override((new IlluminateContainer())->makeWith(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override((new Container())->get(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override((new Container())->make(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override(Container::makeWith(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override(App::get(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override(App::make(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override(App::makeWith(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override(app(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override(resolve(0), map([
    '' => '@',
    'config' => Repository::class,
]));
override((new ContainerInterface())->get(0), map([
    '' => '@',
    'config' => Repository::class,
]));

override(Arr::add(0), type(0));
override(optional(0), type(0));
