<?php

class UsersController extends BaseController{
    protected $layout = "layouts.master";
    public function getDashboard() {
        $this->layout->content = View::make('users.dashboard');
    }
}