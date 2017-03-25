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

namespace Siddhantfriends\LaravelProxify\Exceptions;

/**
 * Exception class
 */
class MissingClientSecretException extends ProxyException {

    public function __construct($parameter) {
        $this->httpStatusCode = 500;
        $this->errorType = 'missing_client_secret';
        parent::__construct(\Lang::get('api-proxy-laravel::messages.missing_client_secret', array('client' => $parameter)));
    }

}
