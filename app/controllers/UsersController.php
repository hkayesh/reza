<?php

class UsersController extends BaseController {
    protected $layout = "layouts.master";
    public function getDashboard() {
        $this->layout->title = 'Dashboard';
        $this->layout->header = 'Dashboard';
        $this->layout->content = View::make('users.dashboard');
    }

    public function getLogin() {
        return View::make('users.login');
    }

    public function getAdd() {
        $this->layout->title = 'Add user';
        $this->layout->header = 'Add user';
        $this->layout->content = View::make('users.add');
    }
}