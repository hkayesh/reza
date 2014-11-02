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
        $addRules = array(
            'name'=>'required|min:4',
            'mobile_number1'=>'required|unique:users',
            'password'=>'required|alpha_num|between:5,20|confirmed',
            'password_confirmation'=>'required'
        );
        $validator = Validator::make(Input::all(), $addRules);

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

    public function getEdit($id) {
        $user = User::find($id);
        $userTypes = UserType::all();

        $this->layout->title = 'Edit user';
        $this->layout->header = 'Edit user';
        $this->layout->content = View::make('users/edit', array(
            'user' => $user
            , 'userTypes' => $userTypes
            , 'currentUserType' => $currentUserType
        ));
    }

    public function postUpdate($id) {
        $validationRules = array(
            'name'=>'required|min:4',
            'mobile_number1'=>'required|unique:users,mobile_number1,' . $id,
        );
        if(Input::has('password')) {
            $validationRules['password'] = 'alpha_num|between:5,12|confirmed';
        }
        $validator = Validator::make(Input::all(), $validationRules);

        if($validator->passes()) {
            $user = User::find($id);

            $user->name = Input::get('name');
            $user->user_type_id = Input::get('user_type');
            $user->mobile_number1 = Input::get('mobile_number1');
            $user->mobile_number2 = Input::get('mobile_number2');
            $user->mobile_number3 = Input::get('mobile_number3');
            $user->email = Input::get('email');
            $user->address = Input::get('address');
            $user->is_active = Input::get('status');
            if(Input::has('password')) {
                $user->password = Hash::make(Input::get('password'));
            }
            $user->save();
            return Redirect::to('user/index')
                ->with('message', 'Saved user '. Input::get('name') .'!');
        }
        else {
            return Redirect::to('user/edit/' . $id)
                ->with('message', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput();
        }

    }
}