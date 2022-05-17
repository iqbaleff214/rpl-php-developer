create database web_dev_rpl;

use web_dev_rpl;

create table users (
    id int unsigned auto_increment primary key,
    name varchar(50),
    address varchar(50)
);