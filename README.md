# TicketparkPingenBundle

This Symfony2 bundles is a wrapper for the API library of [pingen.com](https://www.pingen.com).

## Installation

Add TicketparkPingenBundle in your composer.json:

```js
{
    "require": {
        "ticketpark/pingen-bundle": "0.1"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update ticketpark/pingen-bundle
```

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Ticketpark\PingenBundle\TicketparkPingenBundle()
    );
}
```

## Configuration

``` yml
# app/config/config.yml

ticketpark_pingen:
    token: yourApiToken # required
    staging: false # optional, set to true to use the staging api
```

## Usage

```php
<?php

namespace Acme\Bundle\AcmeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcmeController extends Controller
{
    public function fooAction()
    {
        // Get the pingen service
        $pingen = $this->get('ticketpark.pingen')->get();
        
        // Use any method available in the api library
        $myDocuments = $pingen->document_list();
    }
}
```

## License

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE
