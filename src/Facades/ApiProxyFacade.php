<?php

/**
 * @package   siddhantfriends/laravel-proxify
 * @author    Michele Andreoli <michi.andreoli[at]gmail.com>
 * @copyright Copyright (c) Michele Andreoli
 * @author    Rik Schreurs <rik.schreurs[at]mail.com>
 * @copyright Copyright (c) Rik Schreurs
 * @author    Siddhant Baviskar <siddhantfriends[at]yahoo.co.in>
 * @copyright Copyright (c) Siddhant Baviskar
 * @license   http://mit-license.org/
 * @link      https://github.com/siddhantfriends/laravel-proxify
 */

namespace Siddhantfriends\LaravelProxify\Facades;

use Illuminate\Support\Facades\Facade;

class ApiProxyFacade extends Facade {

    /**
     * Get the registered name of the component
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor() {
        return 'api-proxy.proxy';
    }

}
