<?php
const DB_PROVIDER = 'psql';
const DB_HOST = 'localhost';
const DB_BASANAME = 'cloudshop';
const DB_USERNAME = 'postgres';
const DB_PASSWORD = '';
function db_connect(){
    $pdo = new PDO(
        DB_PROVIDER.':host='.DB_HOST.';dbname='.DB_BASANAME,
        DB_USERNAME,
        DB_PASSWORD
    );
    return $pdo;
}

function query($sql, $params = []){
    $pdo = db_connect();
    $que = $pdo->prepare($sql);
    if (!empty($params)){
        foreach ($params as $key => $value){
            $que->bindValue(':'.$key, $value);
        }
    }
    $que->execute();
    return $que;
}

function select($sql, $params = []){
    $que = query($sql, $params);
    $que->setFetchMode(PDO::FETCH_ASSOC);
    return $que->fetchAll();
}

function update($sql, $params = []){
    $que = query($sql, $params);
    return $que;
}

function delete($sql, $params = []){
    $que = query($sql, $params);
    return $que;
}