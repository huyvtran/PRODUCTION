<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class PaymentContext extends InstanceContext {
    /**
     * Initialize the PaymentContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that will update the
     *                           resource
     * @param string $callSid The SID of the call that will create the resource.
     * @param string $sid The SID of Payments session
     * @return \Twilio\Rest\Api\V2010\Account\Call\PaymentContext
     */
    public function __construct(Version $version, $accountSid, $callSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid, 'callSid' => $callSid, 'sid' => $sid, );

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/Payments/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Update the PaymentInstance
     *
     * @param string $idempotencyKey A unique token for each payment session that
     *                               should be provided to maintain idempotency of
     *                               the session.
     * @param string $statusCallback The URL we should call to send status of
     *                               payment session.
     * @param array|Options $options Optional Arguments
     * @return PaymentInstance Updated PaymentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($idempotencyKey, $statusCallback, $options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'IdempotencyKey' => $idempotencyKey,
            'StatusCallback' => $statusCallback,
            'Capture' => $options['capture'],
            'Status' => $options['status'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new PaymentInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['callSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.PaymentContext ' . \implode(' ', $context) . ']';
    }
}