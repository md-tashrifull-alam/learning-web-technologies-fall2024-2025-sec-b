<?php

$email = $_POST["email"];

function isValidEmail($email) {

    $atSymbolPos = strpos($email, '@');
    if ($atSymbolPos === false) {
        return false; 
    }

    $localPart = substr($email, 0, $atSymbolPos);
    $domainPart = substr($email, $atSymbolPos + 1);

    if (empty($localPart) || empty($domainPart)) {
        return false;
    }

    $dotPos = strpos($domainPart, '.');
    if ($dotPos === false || $dotPos === strlen($domainPart) - 1) {
        return false;
    }

    if (!preg_match('/^[a-zA-Z0-9._-]+$/', $localPart)) {
        return false;
    }

    if (!preg_match('/^[a-zA-Z0-9.-]+$/', $domainPart)) {
        return false;
    }

    return true;
}

if (empty($email)) {
    echo "Invalid email: Field cannot be empty.";
} elseif (!isValidEmail($email)) {
    echo "Invalid email: Must be a valid email address (e.g., anything@example.com).";
} else {
    echo "Valid email!";
}
?>