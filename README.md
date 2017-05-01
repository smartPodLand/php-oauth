PHP oauth client with Fanapium SSO
==================================
This is a simple php app that uses fanapium single sign on service  basedoatuth 2.0 servcei

نحوه استفاده
------

برای استفاده از این کد ابتدا فایل config.php را باز کرده و مقادیر واقعی را در جای مناسب خود جایگزاری کنید.
</div>

```php
$config = [
    "service"=>"__http://SERVICE.ENDPOINT/__",
    "sso"=>"__http://SERVICE.ENDPOINT/oauth__",
    "client_id"=>"__CLIENT_ID__",
    "client_secret"=>"__CLIENT_SECRET__",
    "home"=>"http://WHERE_THIS_CODE_DEPLOYED/"
];
```