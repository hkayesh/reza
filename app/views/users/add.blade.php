<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
<form action="create" class="form-horizontal" method="post">
    <fieldset>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
                <input id="name" name="name" placeholder="" value="{{ Input::old('name') }}" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="user_type">User Type</label>
            <div class="col-md-3">
                <select id="user_type" name="user_type" class="form-control">
                    @foreach ($userTypes as $userType)
                    <option value="{{ $userType->id }}">{{ $userType->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobile_number1">Mobile Number 1</label>
            <div class="col-md-4">
                <input id="mobile_number1" name="mobile_number1" placeholder="" value="{{ Input::old('mobile_number1') }}" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobile_number2">Mobile Number 2</label>
            <div class="col-md-4">
                <input id="mobile_number2" name="mobile_number2" value="{{ Input::old('mobile_number2') }}" placeholder="" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobile_number3">Mobile Number 3</label>
            <div class="col-md-4">
                <input id="mobileNumber3" name="mobile_number3" placeholder="" value="{{ Input::old('mobile_number3') }}" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" value="{{ Input::old('email') }}" placeholder="" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" placeholder="" class="form-control input-md" required="" type="password">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password_confirmation">Confirm Password</label>
            <div class="col-md-4">
                <input id="password_confirmation" name="password_confirmation" placeholder="" class="form-control input-md" required="" type="password">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address">Address</label>
            <div class="col-md-4">
                <textarea class="form-control" id="address" name="address">{{ Input::old('address') }}</textarea>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="status">Status</label>
            <div class="col-md-3">
                <select id="status" name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-8">
                <button id="submit" name="submit" type="submit" class="btn btn-success">Add user</button>
                <button id="reset" name="reset" type="reset" class="btn btn-primary">Reset</button>
            </div>
        </div>

    </fieldset>
</form>
