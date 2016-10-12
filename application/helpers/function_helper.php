<?php
/**
 * 生成密码函数
 * @param  [type] $password [description]
 * @param  [type] $encrypt  [description]
 * @return [type]           [description]
 * @author junmei
 * @email thebuleilfe@outlook.com
 * @date 2016-10-12
 */
function password($password, $encrypt = false) {
	return md5($password . $encrypt);
}