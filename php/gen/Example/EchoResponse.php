<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: echo.proto

namespace Example;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>example.EchoResponse</code>
 */
class EchoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>int32 time = 2;</code>
     */
    private $time = 0;
    /**
     * Generated from protobuf field <code>int32 index = 3;</code>
     */
    private $index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type int $time
     *     @type int $index
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBEcho::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 time = 2;</code>
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>int32 time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 index = 3;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int32 index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

}

