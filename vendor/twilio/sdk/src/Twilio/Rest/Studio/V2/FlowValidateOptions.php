<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V2;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class FlowValidateOptions {
    /**
     * @param string $commitMessage The commit_message
     * @return UpdateFlowValidateOptions Options builder
     */
    public static function update($commitMessage = Values::NONE) {
        return new UpdateFlowValidateOptions($commitMessage);
    }
}

class UpdateFlowValidateOptions extends Options {
    /**
     * @param string $commitMessage The commit_message
     */
    public function __construct($commitMessage = Values::NONE) {
        $this->options['commitMessage'] = $commitMessage;
    }

    /**
     * The commit_message
     *
     * @param string $commitMessage The commit_message
     * @return $this Fluent Builder
     */
    public function setCommitMessage($commitMessage) {
        $this->options['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Studio.V2.UpdateFlowValidateOptions ' . \implode(' ', $options) . ']';
    }
}