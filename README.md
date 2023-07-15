![Postman Screenshot](https://github.com/iamyombo/api20230714/blob/master/public/images/EcommerceAPI.PNG?raw=true)

![Alt text]([image link](https://github.com/iamyombo/api20230714/blob/master/public/images/EcommerceAPI.PNG?raw=true))

## TASK DESCRIPTION:

=======

> > > > > > > f452ccd (API Task Update with ReadMe Update)

Ecommerce API Task Challenge.

## Using POSTMAN:

BASE_URL : http://localhost:80
Version One: V1

## ENDPOINTS

ENDPOINTS
HTTP METHOD
URL
STATUS CODES
REQUEST / RESPONSE FORMAT

---

## Get Products

GET
{{BASE_URL}}/api/v1/product
200 OK
JSON

---

## Create Products

POST
{{BASE_URL}}/api/v1/product
201 Created
JSON

---

## Get Single Product

GET
{{BASE_URL}}/api/v1/ product/{{ProductID}}
200 OK
JSON

---

## Update Product Details

PUT
{ {BASE_URL}}/api/v1/product/{{ ProductID }}
200 OK
JSON

---

## Delete Product

DELETE
{{BASE_URL}}/api/v1/product/{{ ProductID }}
204 No Content
JSON

---

## Get Categories

GET
{{BASE_URL}}/api/v1/category
200 OK
JSON

---

## Create Category

POST {{BASE_URL}}/api/v1/category
201 Created
JSON

---

## Get Single Category

GET
{{BASE_URL}}/api/v1/category/{{CategoryID}}
200 Ok
JSON

---

## Update Category

PUT
{{BASE_URL}}/api/v1/category/{{CategoryID}}
200 OK
JSON

---

## Delete Category

DELETE
{{BASE_URL}}/api/v1/category/{{CategoryID}}
204 No Content
JSON

---

## Get Category By Product

GET
{{BASE_URL}}/api/v1/product/bycategory/{{ProductID}}
200 OK
JSON

---

## Get Products By Category

GET
{{BASE_URL}}/api/v1/category/byproducts/{{CategoryID}}
200 OK
JSON

## Database Interaction:

.env file database connection settings;

DB_CONNECTION=mysql

DB_HOST=host.docker.internal

DB_PORT=3306

DB_DATABASE=laravel

DB_USERNAME=sail

DB_PASSWORD=password

## Dockerization:

The docker built on Laravel Sail and comprises of;

Laravel Sail 8.2/app | apicrud-app-laravel.test-1
MySql Server 8.0 | apicrud-app-mysql-1
Selenium 1.4.0 | apicrud-app-selenium-1
Redis:alpine 7.0.12 | apicrud-app-redis-1

## Testing and Documentation:

## Evaluation Criteria:

## Delivery:

https://github.com/iamyombo/api20230714

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
