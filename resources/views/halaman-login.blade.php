


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/halaman-login.css')}}">
    <title>Halaman login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{route('register.post')}}" method="POST">
                @csrf
                <h1>Sign Up</h1>
                <div class="social-icons">
                </div>
                <span>Gunakan email untuk registrasi</span>
                <input type="text"  name="username"placeholder="Username" required>
                <input type="email"  name="email" placeholder="Email"required>
                <input type="password" name="password" placeholder="Password"  required>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{route('login')}}" method="post">
                @csrf
                <h1>Login</h1>
                <span>Gunakan email dan password untuk login</span>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button>Login</button>
                <a href="#">Lupa Password?</a>

            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <img src="/img/transisiwarnalogo.png" style="width: 45%;">
                    <!-- <h1> Hi there, </h1> -->
                    <p style="font-weight:600; color: white;">Already have Account?</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right" >
                     <img src="/img/transisiwarnalogo.png" style="width: 45%;">
                    <!-- <h1>Hello, Friend!</h1> -->
                    <p style="font-weight:600; color: white;">Want to Register?</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
}       );
    </script>
</body>

</html>
