<form class="form-horizontal">
    <fieldset>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
                <input id="name" name="name" placeholder="" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="userType">User Type</label>
            <div class="col-md-3">
                <select id="userType" name="userType" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobileNumber1">Mobile Number 1</label>
            <div class="col-md-4">
                <input id="mobileNumber1" name="mobileNumber1" placeholder="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobileNumber2">Mobile Number 2</label>
            <div class="col-md-4">
                <input id="mobileNumber2" name="mobileNumber2" placeholder="" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobileNumber3">Mobile Number 3</label>
            <div class="col-md-4">
                <input id="mobileNumber3" name="mobileNumber3" placeholder="" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" placeholder="" class="form-control input-md" type="text">

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
            <label class="col-md-4 control-label" for="confirmPassword">Confirm Password</label>
            <div class="col-md-4">
                <input id="confirmPassword" name="confirmPassword" placeholder="" class="form-control input-md" required="" type="password">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address">Address</label>
            <div class="col-md-4">
                <textarea class="form-control" id="address" name="address"></textarea>
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
                <button id="submit" name="submit" class="btn btn-success">Add user</button>
                <button id="reset" name="reset" class="btn btn-primary">Reset</button>
            </div>
        </div>

    </fieldset>
</form>
