<?php

include 'SDK/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AT_7_mC5xABFviXKmNHUTqdTf92k-hKOQBCxwlort4sX1zNu1wf_B2TFCLdkZMiLLww8iP6fegx6nzIQ',
        //CLiente ID
        'EHAOZWsaq-Fs1PnwNGla5kIc4Cu4xQRulvQxDdsHMrv1bYDFxkCH2aBrzHtIs8oIlqpGjnDDif0W5SUG'
        //Secret
    )
);
