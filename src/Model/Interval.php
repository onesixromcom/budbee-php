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
class Interval implements JsonSerializable
{
    static $dataTypes = array(
        'start' => '\DateTime',
        'stop' => '\DateTime'
    );

    /**
     * Start of interval
     * @var \DateTime
     */
    public $start;

    /**
     * End of interval
     * @var \DateTime
     */
    public $stop;

    public function jsonSerialize(): mixed
    {
    	return array(
    		'start' => $this->start->format('U') * 1000,
    		'stop' => $this->stop->format('U') * 1000
    	);
    }
}
