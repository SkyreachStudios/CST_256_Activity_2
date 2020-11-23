
@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
    <!-- Note Shown: Insert your Login Form from login.php Here -->
<!DOCTYPE html>
<head>


</head>
<body>
<form action = "dologin3" method = "POST">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <h2> Login</h2>
    <table>
        <tr>
            <td>Username: </td><?php echo $errors->first('username')?>
            <td><input type = "text" name = "username" /></td>
        </tr>

        <tr>
            <td>Password:</td><?php echo $errors->first('password')?>
            <td><input type = "password" name = "password" /></td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <input type = "submit" value = "Login" />
            </td>
    </table>
</form>

</body>
</html>
@endsection
