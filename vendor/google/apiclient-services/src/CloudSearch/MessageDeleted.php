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

namespace Google\Service\CloudSearch;

class MessageDeleted extends \Google\Collection
{
<<<<<<< HEAD
  protected $collection_key = 'wonderCardMappings';
=======
  protected $collection_key = 'messageKeys';
>>>>>>> 1f8fa8284 (env)
  protected $imapSyncMappingsType = ImapSyncDelete::class;
  protected $imapSyncMappingsDataType = 'array';
  public $imapSyncMappings;
  protected $messageKeysType = MultiKey::class;
  protected $messageKeysDataType = 'array';
  public $messageKeys;
<<<<<<< HEAD
  protected $wonderCardMappingsType = WonderCardDelete::class;
  protected $wonderCardMappingsDataType = 'array';
  public $wonderCardMappings;
=======
>>>>>>> 1f8fa8284 (env)

  /**
   * @param ImapSyncDelete[]
   */
  public function setImapSyncMappings($imapSyncMappings)
  {
    $this->imapSyncMappings = $imapSyncMappings;
  }
  /**
   * @return ImapSyncDelete[]
   */
  public function getImapSyncMappings()
  {
    return $this->imapSyncMappings;
  }
  /**
   * @param MultiKey[]
   */
  public function setMessageKeys($messageKeys)
  {
    $this->messageKeys = $messageKeys;
  }
  /**
   * @return MultiKey[]
   */
  public function getMessageKeys()
  {
    return $this->messageKeys;
  }
<<<<<<< HEAD
  /**
   * @param WonderCardDelete[]
   */
  public function setWonderCardMappings($wonderCardMappings)
  {
    $this->wonderCardMappings = $wonderCardMappings;
  }
  /**
   * @return WonderCardDelete[]
   */
  public function getWonderCardMappings()
  {
    return $this->wonderCardMappings;
  }
=======
>>>>>>> 1f8fa8284 (env)
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MessageDeleted::class, 'Google_Service_CloudSearch_MessageDeleted');
