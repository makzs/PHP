<?php

echo password_hash('1234', PASSWORD_DEFAULT);

//$hash = '$2y$10$6e98cZqWSvo3frfKRb/Nhu1HGRXlswQ4X9j4aZyowmay8uhVD6B9C'; -> senha123
$hash = '$2y$10$5C.L1HvHyM/pzwFK/VXcZO/HTW7iJGtv2hacAjPceFeeiRabHNYSm'; // -> 1234

if (password_verify('1234', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}