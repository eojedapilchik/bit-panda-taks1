<p align="center"><h2>Web Service App for User - Bitpanda Task 1</h2></p>

## About the App

This app was made with Laravel by Alcides Ojeda

V 0.1  
Date: 16/02/2022

# REST API

The REST API to the example app is described below.

## Get Active User by Country

### Request

`GET /api/users/active/Austria`

    GET http://localhost:8000//api/users/active/Austria

### Response

    Users and their user details

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

```yaml
[
    {
        "id": 5,
        "email": "andreas@yahoo.de",
        "active": 1,
        "created_at": "2020-01-19T16:08:59.000000Z",
        "updated_at": "2020-01-19T16:08:59.000000Z",
        "user_detail":
            {
                "id": 3,
                "user_id": 5,
                "citizenship_country_id": 3,
                "first_name": "Andreas",
                "last_name": "Snow",
                "phone_number": "004366455555555",
            },
    },
]
```

## Update user details just if the user details are there already

### Request

`PUT /api/user_details/id`

    PUT http://localhost:8000/api/user_details/1

### Response

    Returns user details updated

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

```yaml
{
    "id": 1,
    "user_id": 1,
    "citizenship_country_id": 1,
    "first_name": "Ojeda",
    "last_name": "Alec",
    "phone_number": "0043664111111",
}
```

## Delete a user just if no user details exist yet.

### Request

`DELETE /api/users/id`

    DELETE http://localhost:8000/api/users/10

### Response

    Returns No content if user was deleted

    HTTP/1.1 204 NO CONTENT
    Status: 204 NO CONTENT

## Installation in local Env.

-   Clone this Repository
-   Create Database bitpanda and user.
-   Run composer `composer install` in the root folder of the app
-   Run `php artisan db:seed`
-   Run server with the command `php artisan serve`

NOTE:  
make sure to have the database dump files inside the database/seeders folder
