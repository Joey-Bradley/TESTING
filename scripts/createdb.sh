#!/bin/bash
 mysql -uroot -e "create database mydatabase;"
 mysql -uroot -e "CREATE TABLE mydatabase.contact(name  VARCHAR(50), author  VARCHAR(20));"