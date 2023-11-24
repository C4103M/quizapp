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

namespace Google\Service\Dataproc;

class SparkRBatch extends \Google\Collection
{
  protected $collection_key = 'fileUris';
  /**
   * @var string[]
   */
  public $archiveUris;
  /**
   * @var string[]
   */
  public $args;
  /**
   * @var string[]
   */
  public $fileUris;
  /**
   * @var string
   */
  public $mainRFileUri;

  /**
   * @param string[]
   */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /**
   * @return string[]
   */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
  /**
   * @param string[]
   */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /**
   * @return string[]
   */
  public function getArgs()
  {
    return $this->args;
  }
  /**
   * @param string[]
   */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /**
   * @return string[]
   */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /**
   * @param string
   */
  public function setMainRFileUri($mainRFileUri)
  {
    $this->mainRFileUri = $mainRFileUri;
  }
  /**
   * @return string
   */
  public function getMainRFileUri()
  {
    return $this->mainRFileUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SparkRBatch::class, 'Google_Service_Dataproc_SparkRBatch');
