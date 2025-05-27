<?php
require './Model/User.php';
class UserController
{
    public $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        return $this->user->all();
    }
}
