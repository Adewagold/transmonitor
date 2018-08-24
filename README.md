# Transmonitor
This php library will allow you to consume Transfast API for instant merchant settlements for direct bank deposit or cash transfers.

## Transmonitor allows you to
- Get Pending Orders
- Get All Transactions
- Manual Settlements
- Create Order
- Get Customers
- Get Reconciled Orders

### Requirements
- > PHP 5.5.3 

### Installation

Add transfast to your `composer.json` file
```
"require": {
  "transmonitor/transmonitor": "dev-master"
}
```

Enter composer update to add transmonitor to your project
```
composer update
```

If your framework does not autoload by default or you are creating a composer project from scratch, please
remember that you will need to include vendor/autoload e.g
```
require_once 'path_to_vendor/autoload.php';
```
## Configuration

You can publish the configuration file using this command:

```bash
php artisan vendor:publish --provider="Unicodeveloper\Paystack\PaystackServiceProvider"
```

Check for the file `transfast.php` in your `package` directory and add your merchant key:

```php
<?php

return [

     /**
    * Transfast Merchant Id
    * @return string $url
    */
    public static $merchantId ='1234567890';
    

];
```
### Get Started
Examples on how to get started will be added soon.
