<?php
/**
 * CreateConsumerResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * CreateConsumerResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateConsumerResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'consumer_key' => 'string',
        'consumer_secret' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'consumer_key' => 'consumerKey',
        'consumer_secret' => 'consumerSecret'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'consumer_key' => 'setConsumerKey',
        'consumer_secret' => 'setConsumerSecret'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'consumer_key' => 'getConsumerKey',
        'consumer_secret' => 'getConsumerSecret'
    );
  
    
    /**
      * $consumer_key The key of the newly created consumer
      * @var string
      */
    protected $consumer_key;
    
    /**
      * $consumer_secret The secret of the newly created consumer
      * @var string
      */
    protected $consumer_secret;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->consumer_key = $data["consumer_key"];
            $this->consumer_secret = $data["consumer_secret"];
        }
    }
    
    /**
     * Gets consumer_key
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumer_key;
    }
  
    /**
     * Sets consumer_key
     * @param string $consumer_key The key of the newly created consumer
     * @return $this
     */
    public function setConsumerKey($consumer_key)
    {
        
        $this->consumer_key = $consumer_key;
        return $this;
    }
    
    /**
     * Gets consumer_secret
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->consumer_secret;
    }
  
    /**
     * Sets consumer_secret
     * @param string $consumer_secret The secret of the newly created consumer
     * @return $this
     */
    public function setConsumerSecret($consumer_secret)
    {
        
        $this->consumer_secret = $consumer_secret;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
