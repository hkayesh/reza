<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/login.css') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    @if(Session::has('message'))
    <p class="alert">{{ Session::get('message') }}</p>
    @endif

    <form class="form-signin" role="form" method="post" action="login">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" name="mobile_number1" class="form-control" placeholder="Mobile Number" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
{{ HTML::script('js/jquery-1.11.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/holder.js') }}
</body>
</html>
