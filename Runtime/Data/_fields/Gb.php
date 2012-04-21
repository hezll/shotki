<?php
return array (
  0 => 'gb_id',
  1 => 'gb_cid',
  2 => 'gb_user',
  3 => 'gb_content',
  4 => 'gb_intro',
  5 => 'gb_addtime',
  6 => 'gb_qq',
  7 => 'gb_ip',
  8 => 'gb_oid',
  9 => 'gb_del',
  '_autoinc' => true,
  '_pk' => 'gb_id',
  '_type' => 
  array (
    'gb_id' => 'mediumint(8) unsigned',
    'gb_cid' => 'mediumint(8)',
    'gb_user' => 'varchar(50)',
    'gb_content' => 'text',
    'gb_intro' => 'text',
    'gb_addtime' => 'int(11)',
    'gb_qq' => 'varchar(20)',
    'gb_ip' => 'varchar(20)',
    'gb_oid' => 'tinyint(1)',
    'gb_del' => 'tinyint(1)',
  ),
);
?>