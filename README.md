Установка
------------

1) Склонировать репозиторий

2) Для того чтобы развернуть окружение в папке проекта выполните 

```bash
$ vagrant up
```
---
Теперь сайт доступен по адресу
[192.168.83.138](http://rest-api.local)

Frontend URL: http://rest-api.local

Backend URL: http://backend.rest-api.local

Пользователь по умолчанию:
* login: `admin`
* password: `admin`

API URL: http://api.rest-api.local

**GET** http://api.rest-api.local/products

**GET** http://api.rest-api.local/products/ID


Bearer Token: `admin_access_token`

**POST** http://api.rest-api.local/products

**PUT|PATCH|DELETE** http://api.rest-api.local/products/ID

О проекте: frontend/views/site/about