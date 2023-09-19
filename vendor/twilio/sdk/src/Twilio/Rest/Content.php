<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Content\V1;

/**
 * @property \Twilio\Rest\Content\V1 $v1
 * @property \Twilio\Rest\Content\V1\ContentList $contents
<<<<<<< HEAD
 * @property \Twilio\Rest\Content\V1\LegacyContentList $legacyContents
=======
>>>>>>> 1f8fa8284 (env)
 * @method \Twilio\Rest\Content\V1\ContentContext contents(string $sid)
 */
class Content extends Domain {
    protected $_v1;

    /**
     * Construct the Content Domain
     *
     * @param Client $client Client to communicate with Twilio
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://content.twilio.com';
    }

    /**
     * @return V1 Version v1 of content
     */
    protected function getV1(): V1 {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array([$this, $method], $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    protected function getContents(): \Twilio\Rest\Content\V1\ContentList {
        return $this->v1->contents;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextContents(string $sid): \Twilio\Rest\Content\V1\ContentContext {
        return $this->v1->contents($sid);
    }

<<<<<<< HEAD
    protected function getLegacyContents(): \Twilio\Rest\Content\V1\LegacyContentList {
        return $this->v1->legacyContents;
    }

=======
>>>>>>> 1f8fa8284 (env)
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Content]';
    }
}