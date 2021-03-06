<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getVpcId() 获取VPC实例ID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID
 * @method array getInstanceIds() 获取CVM实例ID
 * @method void setInstanceIds(array $InstanceIds) 设置CVM实例ID
 */

/**
 *AttachClassicLinkVpc请求参数结构体
 */
class AttachClassicLinkVpcRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID
     */
    public $VpcId;

    /**
     * @var array CVM实例ID
     */
    public $InstanceIds;
    /**
     * @param string $VpcId VPC实例ID
     * @param array $InstanceIds CVM实例ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
