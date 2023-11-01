Установка
------------
Необходим установленный Vagrant и Virtualbox.

1) Склонировать репозиторий

2) Для того чтобы развернуть окружение в папке проекта выполните 

```bash
$ vagrant up
```
---
Возможно, придется добавить свой Personal Access Token от Githab-а здесь:
vagrant/config/vagrant-local.example.yml

Теперь сайт доступен по адресу
[192.168.83.138](http://rest-api.local)

( Если миграции не применились:

-в терминале:
  * vagrant ssh

 -заходим в папку проекта:
  * cd /app
  * php yii migrate
    
на вопрос:
* Apply the above migrations? (yes|no):
  
отвечаем yes )

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
