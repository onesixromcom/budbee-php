<?php
/**
 *  Copyright 2014 Budbee AB.
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
namespace Budbee\Model;

use \JsonSerializable;

/**
 * @author Nicklas Moberg
 */
class EDI implements JsonSerializable
{
    static $dataTypes = array(
        'format' => 'string',
        'message' => 'string'
    );

    /**
     * The standard of the EDI message (e.g. X12)
     * @var string
     */
    public $format;

    /**
     * The EDI message.
     * @var string
     */
    public $message;

    public function jsonSerialize(): mixed
    {
    	return array(
    		'format' => $this->format,
    		'message' => $this->message
    	);
    }
}
