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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAppUrl() 获取app的url，必须保证不用权限校验就可以下载
 * @method void setAppUrl(string $AppUrl) 设置app的url，必须保证不用权限校验就可以下载
 * @method string getAppMd5() 获取app的md5
 * @method void setAppMd5(string $AppMd5) 设置app的md5
 * @method integer getAppSize() 获取app的大小
 * @method void setAppSize(integer $AppSize) 设置app的大小
 * @method string getFileName() 获取app的文件名，指定后加固后的文件名是{FileName}_legu.apk
 * @method void setFileName(string $FileName) 设置app的文件名，指定后加固后的文件名是{FileName}_legu.apk
 * @method string getAppPkgName() 获取app的包名
 * @method void setAppPkgName(string $AppPkgName) 设置app的包名
 * @method string getAppVersion() 获取app的版本号
 * @method void setAppVersion(string $AppVersion) 设置app的版本号
 * @method string getAppIconUrl() 获取app的图标url
 * @method void setAppIconUrl(string $AppIconUrl) 设置app的图标url
 * @method string getAppName() 获取app的名称
 * @method void setAppName(string $AppName) 设置app的名称
 */

/**
 *提交的app基本信息
 */
class AppInfo extends AbstractModel
{
    /**
     * @var string app的url，必须保证不用权限校验就可以下载
     */
    public $AppUrl;

    /**
     * @var string app的md5
     */
    public $AppMd5;

    /**
     * @var integer app的大小
     */
    public $AppSize;

    /**
     * @var string app的文件名，指定后加固后的文件名是{FileName}_legu.apk
     */
    public $FileName;

    /**
     * @var string app的包名
     */
    public $AppPkgName;

    /**
     * @var string app的版本号
     */
    public $AppVersion;

    /**
     * @var string app的图标url
     */
    public $AppIconUrl;

    /**
     * @var string app的名称
     */
    public $AppName;
    /**
     * @param string $AppUrl app的url，必须保证不用权限校验就可以下载
     * @param string $AppMd5 app的md5
     * @param integer $AppSize app的大小
     * @param string $FileName app的文件名，指定后加固后的文件名是{FileName}_legu.apk
     * @param string $AppPkgName app的包名
     * @param string $AppVersion app的版本号
     * @param string $AppIconUrl app的图标url
     * @param string $AppName app的名称
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
        if (array_key_exists("AppUrl",$param) and $param["AppUrl"] !== null) {
            $this->AppUrl = $param["AppUrl"];
        }

        if (array_key_exists("AppMd5",$param) and $param["AppMd5"] !== null) {
            $this->AppMd5 = $param["AppMd5"];
        }

        if (array_key_exists("AppSize",$param) and $param["AppSize"] !== null) {
            $this->AppSize = $param["AppSize"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("AppIconUrl",$param) and $param["AppIconUrl"] !== null) {
            $this->AppIconUrl = $param["AppIconUrl"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}
