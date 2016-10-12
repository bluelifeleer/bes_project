<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Bes Api Config
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
$config['bes_api']['dsp_id'] = '18010532';
$config['bes_api']['dsp_token'] = 'c1cab1eb74dd83561cc042cd713b24d9';
$config['bes_api']['http_lists']['advertiser']['add'] = 'https://api.es.baidu.com/v1/advertiser/add';
$config['bes_api']['http_lists']['advertiser']['update'] = 'https://api.es.baidu.com/v1/advertiser/update';
$config['bes_api']['http_lists']['advertiser']['queryQualification'] = 'https://api.es.baidu.com/v1/advertiser/queryQualification';
$config['bes_api']['http_lists']['advertiser']['get'] = 'https://api.es.baidu.com/v1/advertiser/get';
$config['bes_api']['http_lists']['advertiser']['getAll'] = 'https://api.es.baidu.com/v1/advertiser/getAll';
$config['bes_api']['http_lists']['creative']['add'] = 'https://api.es.baidu.com/v1/creative/add';
$config['bes_api']['http_lists']['creative']['update'] = 'https://api.es.baidu.com/v1/creative/update';
$config['bes_api']['http_lists']['creative']['get'] = 'https://api.es.baidu.com/v1/creative/get';
$config['bes_api']['http_lists']['creative']['getAll'] = 'https://api.es.baidu.com/v1/creative/getAll';
$config['bes_api']['http_lists']['creative']['queryAuditState'] = 'https://api.es.baidu.com/v1/creative/queryAuditState';
$config['bes_api']['http_lists']['creative']['preview'] = 'https://api.es.baidu.com/v1/website/creative/preview';
$config['bes_api']['http_lists']['domain']['queryOpenDomainState'] = 'https://api.es.baidu.com/v1/opendomain/queryOpenDomainState';
$config['bes_api']['ip_white_list'] = '114.55.113.231';