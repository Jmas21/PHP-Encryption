<?php
    echo "This is Version 0.4 \n";
    $pass = "test";
    $salt = "database";
    echo $pass. "\n";
    echo "MD5: " . md5($pass). "\n";
    echo "crypt: " . crypt($pass). "\n";
    echo "crypt+salt: ". crypt($pass, $salt)."\n";
    echo "crypt+ md5: ". crypt($pass, md5($salt))."\n";
    echo "SHA: ". sha1($pass)."\n";
    echo "HASH: ". password_hash($pass, PASSWORD_DEFAULT)."\n";
    
    echo "PASSWORD VERIFY: \n";
    $ohgod = "test";
    $whygod = "test";
    $pas  = password_hash($whygod, PASSWORD_DEFAULT);
    $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
    if (password_verify($ohgod, $pas)) {
           echo 'Password is valid!';
    } else {
           echo 'Invalid password.';
    }
    
    echo "\n". phpversion();

?>