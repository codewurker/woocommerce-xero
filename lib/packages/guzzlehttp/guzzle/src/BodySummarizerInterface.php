<?php
/**
 * @license MIT
 *
 * Modified by woocommerce on 17-March-2025 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Automattic\WooCommerce\Xero\Vendor\GuzzleHttp;

use Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
