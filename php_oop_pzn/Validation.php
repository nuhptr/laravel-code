<?php

use Cassandra\Exception\ValidationException;

class LoginRequest
{
    public string $username;
    public string $password;
}

/**
 * @throws Exception
 */
function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationException("Username is null");
    } else if (!isset($loginRequest->password)) {
        throw new ValidationException("Password is null");
    } else if (trim($loginRequest->username = "")) {
        throw new Exception("Username is empty");
    } else if (trim($loginRequest->password = "")) {
        throw new Exception("Password is empty");
    }
}

$login = new LoginRequest();
try {
    validateLoginRequest($login);
} catch (Exception $e) {
    echo "Validation error : {$e->getMessage()}" . PHP_EOL;
}

echo "Valid" . PHP_EOL;