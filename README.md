Purpose
-------

This library defines an abstract Magento 2 controller that disables all form key checks on POST requests. This is useful, for example, when implementing a controller that must receive POST requests from an outside system, such as a payment gayeway.
For Magento 2.0 to 2.2 this module defines just a plain controller, as no such check was present in these Magento versions. For Magento 2.3+, this library defines a controller that implements the CsrfAwareActionInterface interface.

Use
---

Require this library by running the command:

```
composer require webgriffe/magento2-open-post-controller ^1.0
```

Depending on the currently installed Magento version, this will define a different version of an abstract controller class. Any controller that inherits from that abstract controller will then disable the form key checks. 
