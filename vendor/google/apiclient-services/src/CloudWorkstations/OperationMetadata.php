<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudWorkstations;

class OperationMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $apiVersion;
  /**
<<<<<<< HEAD
=======
   * @var bool
   */
  public $cancelRequested;
  /**
>>>>>>> 1f8fa8284 (env)
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $endTime;
  /**
<<<<<<< HEAD
   * @var bool
   */
  public $requestedCancellation;
  /**
   * @var string
   */
  public $statusMessage;
=======
   * @var string
   */
  public $statusDetail;
>>>>>>> 1f8fa8284 (env)
  /**
   * @var string
   */
  public $target;
  /**
   * @var string
   */
  public $verb;

  /**
   * @param string
   */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /**
   * @return string
   */
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  /**
<<<<<<< HEAD
=======
   * @param bool
   */
  public function setCancelRequested($cancelRequested)
  {
    $this->cancelRequested = $cancelRequested;
  }
  /**
   * @return bool
   */
  public function getCancelRequested()
  {
    return $this->cancelRequested;
  }
  /**
>>>>>>> 1f8fa8284 (env)
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
<<<<<<< HEAD
   * @param bool
   */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /**
   * @return bool
   */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /**
   * @param string
   */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
=======
   * @param string
   */
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
>>>>>>> 1f8fa8284 (env)
  }
  /**
   * @return string
   */
<<<<<<< HEAD
  public function getStatusMessage()
  {
    return $this->statusMessage;
=======
  public function getStatusDetail()
  {
    return $this->statusDetail;
>>>>>>> 1f8fa8284 (env)
  }
  /**
   * @param string
   */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /**
   * @return string
   */
  public function getTarget()
  {
    return $this->target;
  }
  /**
   * @param string
   */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /**
   * @return string
   */
  public function getVerb()
  {
    return $this->verb;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationMetadata::class, 'Google_Service_CloudWorkstations_OperationMetadata');
