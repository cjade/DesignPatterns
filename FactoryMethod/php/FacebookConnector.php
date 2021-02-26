<?php


namespace FactoryMethod\php;


class FacebookConnector implements SocialNetworkConnector
{

    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login    = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo '登录 账号：' . $this->login . ' 密码 ：' . $this->password;
    }

    public function logOut(): void
    {
        echo '退出 账号：' . $this->login;
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}