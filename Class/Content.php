<?php

class Content{
    #[NotBlank] // attribute dari class NotBlank
    #[Length(min: 4, max: 8)] // attribute dari class Length
    public string $username;

    #[NotBlank] // attribute dari class NotBlank
    #[Length(min: 3, max: 10)] // attribute dari class Length
    public string $email;

    #[NotBlank] // attribute dari class NotBlank
    #[Length(min: 10, max: 20)] // attribute dari class Length
    public string $content;
}