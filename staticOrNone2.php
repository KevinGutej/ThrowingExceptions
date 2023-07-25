<?php

class User {
    private string $firstName  = '';
    private string $password = '';
    private static string  $groupName = '';

    public function __construct(string $firstName, string $password)
    {
        $this->firstName = $firstName;
        $this->password = $password;
    }

    public static function setGroupName(string $groupName): void {
        $lowerCaseGroup = strtolower($groupName);
        self::$groupName = $lowerCaseGroup;
    }

    public function printGroupName(): void {
        echo $this->firstName . " is a part of group : " . self::$groupName;
    }
}

$user = new User("John", "hello123");

User::setGroupName('USER');
$user->printGroupName();

