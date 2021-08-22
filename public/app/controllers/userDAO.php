<?php

class UserDAO {
    public static function create($user) {
        $user = new User();

        echo $user->getUsername() . ' ' . $user->getPassword();
    }
}

?>