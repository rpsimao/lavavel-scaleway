# Laravel-Scaleway

 
Consume Scaleway RESP API, with Laravel integration



## Table of Contents

+ [Installation](#installation)


## Installation


```
{
    "require": {
        "rpsimao/laravel-scaleway": "~1.0"
    }
}
```

Add provider in your `app.php`


```
'providers' => array(
    //...
    rpsimao\Scaleway\LaravelScalewayServiceProvider::class,
),

```

Add facade in your `app.php`


```
'aliases' => array(
    //...
    'RPSScaleway' => rpsimao\Scaleway\LaravelScalewayFacade::class,
),

```

Set the api key in `config/services.php`

```
  'scaleway' => [
      'user' => env('SCALEWAY-USER'),
      'password' => env('SCALEWAY-PASSWORD'),
      'token'=> env('SCALEWAY-TOKEN')
  ],
```

Set the Credentials in .env file

```
SCALEWAY-USER=my-username
SCALEWAY-PASSWORD=my-password
SCALEWAY-TOKEN=my-token

```
