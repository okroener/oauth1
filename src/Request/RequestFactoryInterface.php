<?php

namespace Risan\OAuth1\Request;

use Risan\OAuth1\Credentials\TemporaryCredentials;

interface RequestFactoryInterface
{
    /**
     * Get the ConfigInterface instance.
     *
     * @return \Risan\OAuth1\Config\ConfigInterface
     */
    public function getConfig();

    /**
     * Get the AuthorizationHeaderInterface instance.
     *
     * @return \Risan\OAuth1\Request\AuthorizationHeaderInterface
     */
    public function getAuthorizationHeader();

    /**
     * Create request for obtaining temporary credentials.
     *
     * @return \Risan\OAuth1\Request\RequestInterface
     */
    public function forTemporaryCredentials();

    /**
     * Create request for obtaining token credentials.
     *
     * @param  \Risan\OAuth1\Credentials\TemporaryCredentials $temporaryCredentials
     * @param  string $verificationCode
     * @return \Risan\OAuth1\Request\RequestInterface
     */
    public function forTokenCredentials(TemporaryCredentials $temporaryCredentials, $verificationCode);
}
