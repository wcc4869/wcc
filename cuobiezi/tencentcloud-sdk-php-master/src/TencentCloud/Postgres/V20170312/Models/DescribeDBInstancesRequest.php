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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPageSize() 获取每页显示数量，默认返回10条。
 * @method void setPageSize(integer $PageSize) 设置每页显示数量，默认返回10条。
 * @method integer getPageNumber() 获取分页序号，从1开始。
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，从1开始。
 * @method array getFilters() 获取过滤条件，目前支持：db-instance-id、db-instance-name两种。
 * @method void setFilters(array $Filters) 设置过滤条件，目前支持：db-instance-id、db-instance-name两种。
 */

/**
 *DescribeDBInstances请求参数结构体
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer 每页显示数量，默认返回10条。
     */
    public $PageSize;

    /**
     * @var integer 分页序号，从1开始。
     */
    public $PageNumber;

    /**
     * @var array 过滤条件，目前支持：db-instance-id、db-instance-name两种。
     */
    public $Filters;
    /**
     * @param integer $PageSize 每页显示数量，默认返回10条。
     * @param integer $PageNumber 分页序号，从1开始。
     * @param array $Filters 过滤条件，目前支持：db-instance-id、db-instance-name两种。
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
