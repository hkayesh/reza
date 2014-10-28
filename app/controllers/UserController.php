<?php

class UserController extends BaseController {
    protected $layout = "layouts.master";

    public function getIndex() {
        $users = User::all();

        $this->layout->title = 'Show users';
        $this->layout->header = 'Users';
        $this->layout->content = View::make('users.index')->with('users', $users);
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);

        if($validator->passes()) {
            $user = new User;
            $user->name = Input::get('name');
            $user->user_type_id = Input::get('user_type');
            $user->mobile_number1 = Input::get('mobile_number1');
            $user->mobile_number2 = Input::get('mobile_number2');
            $user->mobile_number3 = Input::get('mobile_number3');
            $user->email = Input::get('email');
            $user->address = Input::get('address');
            $user->is_active = Input::get('status');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('user/add')
                ->with('message', 'Added user '. Input::get('name') .'!');
        }
        else {
            return Redirect::to('user/add')
                ->with('message', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function getDashboard() {
        $this->layout->title = 'Dashboard';
        $this->layout->header = 'Dashboard';
        $this->layout->content = View::make('users.dashboard');
    }

    public function getLogin() {
        return View::make('users.login');
    }

    public function getAdd() {

        $userTypes = UserType::all();

        $this->layout->title = 'Add user';
        $this->layout->header = 'Add user';
        $this->layout->content = View::make('users.add')->with('userTypes', $userTypes);
    }
}