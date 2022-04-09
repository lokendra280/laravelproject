<h1>Hello {{$user->name}}</h1>
<p>
    please click the passwrod reset button to reset your password
    <a href="{{url('reset_password/'.$user->email. '/'.$code)}}">Reset Password</a>
</p>

