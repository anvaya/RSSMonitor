<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2013/04/01 06:41:46

return array(
'doctrine' => new sfDoctrineDatabase(array (
  'dsn' => 'sqlsrv:Server=XPWINDOWS7\\SQLEXPRESS;Database=dbRssCMS;MultipleActiveResultSets=false',
  'username' => 'ASPUSER',
  'password' => 'm2253327',
  'encoding' => 'UTF-8',
  'attributes' => 
  array (
    'tblname_format' => 'rss_%s',
  ),
  'name' => 'doctrine',
)),

'SngCMS' => new sfDoctrineDatabase(array (
  'dsn' => 'sqlsrv:Server=XPWINDOWS7\\SQLEXPRESS;Database=dbSngCMS;MultipleActiveResultSets=false',
  'username' => 'ASPUSER',
  'password' => 'm2253327',
  'encoding' => 'UTF-8',
  'attributes' => 
  array (
    'tblname_format' => 'cms_%s',
  ),
  'name' => 'SngCMS',
)),);