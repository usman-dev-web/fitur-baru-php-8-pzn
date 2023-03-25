<?php

class LoginRequest{
    #[NotBlank] // menambahkan attribute NotBlank
    #[Length(min: 4, max: 8)] // menambahkan attribute Length
    public ?string $username;

    #[NotBlank] // menambahkan attribute NotBlank
    #[Length(min: 8, max: 10)] // menambahkan attribute Length
    public ?string $password;
}