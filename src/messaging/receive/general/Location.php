<?php
/**
 *   Copyright (c) [2019] [Yanlongli <jobs@yanlongli.com>]
 *   [Wechat] is licensed under the Mulan PSL v1.
 *   You can use this software according to the terms and conditions of the Mulan PSL v1.
 *   You may obtain a copy of Mulan PSL v1 at:
 *       http://license.coscl.org.cn/MulanPSL
 *   THIS SOFTWARE IS PROVIDED ON AN "AS IS" BASIS, WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR
 *   IMPLIED, INCLUDING BUT NOT LIMITED TO NON-INFRINGEMENT, MERCHANTABILITY OR FIT FOR A PARTICULAR
 *   PURPOSE.
 *   See the Mulan PSL v1 for more details.
 *
 *   Author: Yanlongli <jobs@yanlongli.com>
 *   Date:   2019/11/14
 *   IDE:    PhpStorm
 *   Desc:  地理位置坐标消息
 */
declare(strict_types=1);

namespace yanlongli\wechat\messaging\receive\general;


use yanlongli\wechat\messaging\receive\GeneralMessage;

/**
 * Class Location
 * @package yanlongli\wechat\messaging\receive
 * @property string $Location_X 地理位置维度
 * @property string $Location_Y 地理位置经度
 * @property string $Scale 地图缩放大小
 * @property string $Label 地理位置信息
 */
class Location extends GeneralMessage
{
    const TYPE = 'location';
}