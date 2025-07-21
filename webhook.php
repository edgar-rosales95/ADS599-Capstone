<?php
$secret = 'MudButt2345';
$headers = getallheaders();
$hubSignature = $headers['X-Hub-Signature'] ?? '';

$payload = file_get_contents('php://input');
$hash = 'sha1=' . hash_hmac('sha1', $payload, $secret);

if (hash_equals($hubSignature, $hash)) {
    shell_exec('/bin/bash /var/www/deploy.sh');
    http_response_code(200);
    echo "Updated.";
} else {
    http_response_code(403);
    echo "Forbidden.";
}
?>
