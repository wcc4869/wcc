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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getSuccessNumber() 获取验证成功的根域名数量。
 * @method void setSuccessNumber(integer $SuccessNumber) 设置验证成功的根域名数量。
 * @method integer getFailNumber() 获取验证失败的根域名数量。
 * @method void setFailNumber(integer $FailNumber) 设置验证失败的根域名数量。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *VerifySites返回参数结构体
 */
class VerifySitesResponse extends AbstractModel
{
    /**
     * @var integer 验证成功的根域名数量。
     */
    public $SuccessNumber;

    /**
     * @var integer 验证失败的根域名数量。
     */
    public $FailNumber;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $SuccessNumber 验证成功的根域名数量。
     * @param integer $FailNumber 验证失败的根域名数量。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("SuccessNumber",$param) and $param["SuccessNumber"] !== null) {
            $this->SuccessNumber = $param["SuccessNumber"];
        }

        if (array_key_exists("FailNumber",$param) and $param["FailNumber"] !== null) {
            $this->FailNumber = $param["FailNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
