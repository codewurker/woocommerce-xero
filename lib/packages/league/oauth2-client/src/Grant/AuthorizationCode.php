<?php
/**
 * This file is part of the league/oauth2-client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Alex Bilbie <hello@alexbilbie.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link http://thephpleague.com/oauth2-client/ Documentation
 * @link https://packagist.org/packages/league/oauth2-client Packagist
 * @link https://github.com/thephpleague/oauth2-client GitHub
 *
 * Modified by woocommerce on 01-July-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Automattic\WooCommerce\Xero\Vendor\League\OAuth2\Client\Grant;

/**
 * Represents an authorization code grant.
 *
 * @link http://tools.ietf.org/html/rfc6749#section-1.3.1 Authorization Code (RFC 6749, §1.3.1)
 */
class AuthorizationCode extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'authorization_code';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'code',
        ];
    }
}
