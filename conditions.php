<?php
// Write a functions that checks user age if minor cannot open a bank account and if adult can open a bank account.
function checkBankAccountEligibility($age) {
    if ($age < 20) {
        return "You are a minor and cannot open a bank account.";
    } else if ($age >= 20) {
        return "You are an adult and can open a bank account.";
    } else {
        return "Invalid age input.";
    }
}
 echo checkBankAccountEligibility(25);
 echo checkBankAccountEligibility(18);

?>
