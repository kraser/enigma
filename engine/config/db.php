<?php

return [
    //конфигурация БД postgresSql
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=testdb',
    'username' => 'postgres',
    'password' => 'corega',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
