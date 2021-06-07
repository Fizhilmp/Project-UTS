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

class Google_Service_Apigee_GoogleCloudApigeeV1OperationGroup extends Google_Collection
{
  protected $collection_key = 'operationConfigs';
  public $operationConfigType;
  protected $operationConfigsType = 'Google_Service_Apigee_GoogleCloudApigeeV1OperationConfig';
  protected $operationConfigsDataType = 'array';

  public function setOperationConfigType($operationConfigType)
  {
    $this->operationConfigType = $operationConfigType;
  }
  public function getOperationConfigType()
  {
    return $this->operationConfigType;
  }
  /**
   * @param Google_Service_Apigee_GoogleCloudApigeeV1OperationConfig[]
   */
  public function setOperationConfigs($operationConfigs)
  {
    $this->operationConfigs = $operationConfigs;
  }
  /**
   * @return Google_Service_Apigee_GoogleCloudApigeeV1OperationConfig[]
   */
  public function getOperationConfigs()
  {
    return $this->operationConfigs;
  }
}
