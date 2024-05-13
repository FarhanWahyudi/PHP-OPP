<?php
    function validateLoginRequest(LoginRequest $request) {
        if(!isset($request->username)) {
            throw new ValidationException('username is null');
        } elseif(!isset($request->password)) {
            throw new ValidationException('password is null');
        } elseif(trim($request->username) == '') {
            throw new Exception('username is empy');
        } elseif(trim($request->password) == '') {
            throw new Exception('password is empy');
        }
    }
?>