PHP oauth client with Fanapium SSO
==================================
This is a simple php app that uses fanapium single sign on service  based on oauth 2.0 service

About SSO
----------
In this sample app authorization code flow is implemented, first you send a authorization request to _/oauth2/authorize_ endpoint like table below:
 
Request | Response (redirect)
------- | --------
https://auth2server.com/oauth2/authorize | https://example.com/oauth/callback
?client_id=$CLIENT_ID | ?code=$AUTHORIZATION_CODE
&response_type=code |  &state=$STATE
&redirect_uri=$CLIENT_REDIRECT_URI |

                               
Then you must use the returned code to request token, this time you send a request to _/oauth2/token_ endpoint like table below:

Request | Response
------- | --------
POST https://auth2server.com/oauth2/token | {
  ?grant_type=authorization_code | "access_token": "$ACCESS_TOKEN",
  &code=$AUTH_CODE | "token_type": "Bearer",
  &redirect_uri=$REDIRECT_URI | "expires_in": 3600,
  &client_id=$CLIENT_ID | "scope": "profile email",
  &client_secret=$CLIENT_SECRET |  "refresh_token": "$REFRESH_TOKEN",
  &nbsp;| "id_token": "$JWT_TOKEN"
   &nbsp;| }
   
You can use the retrieved token to access user information by sending GET request to the _/user_ endpoint: 

```http
https://auth2server.com/user
```
the token must be sent using header like this:

Key | Value
--- | -----
Authorization | Bearer _THE_TOKEN_STRING_

for study more about Oauth2 concept see the link below:
https://aaronparecki.com/oauth-2-simplified/ 


How to use this project
-----------------------

This project is built using simple php and access_token and refresh token are retrieved using curl and stored in php default $_SESSION magic variable for running this project you must enter your client_id and client_secret and other needed information in config.php file.

```php
    $config = [
        //main endpont:
        "service"=>"__http://SERVICE.ENDPOINT/__",
        //oauth endpoint:
        "sso"=>"__http://SERVICE.ENDPOINT/oauth__",
        "client_id"=>"__CLIENT_ID__",
        "client_secret"=>"__CLIENT_SECRET__",
        //the url of where this app is deployed
        "home"=>"http://WHERE_THIS_CODE_DEPLOYED/"
    ];
```