<?php

return array(
    'zf-oauth2-client' => array(
        'default' => array(
            'clientId' => 'client_id',
            'secret' => 'password',
            'endpoint' => 'http://localhost:8081/oauth', # The zf-oauth2 server
            'callback' => 'http://localhost:8082/application/oauth2/callback', # Your local callback
        ),
    ),
);
