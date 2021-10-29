<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();

    session_unset();

    session_destroy();

    header('Location: /admin/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <title>Admin Dasboard</title>

    <style>
        .main-menu .logo {
            text-decoration: none;
        }

        ul {
            display: flex;
        }

    </style>
</head>

<body>
    <nav class="main-menu">
        <a href="/admin" class="logo">
            <h1><span>BLOG</span>MIN</h1>
        </a>
        <ul>
            <li><a href="/">See blog</a></li>
            <li><a href="{{ url('/admin/create') }}">Create Post</a></li>
            <li><a href="/admin/posts.php">View Posts</a></li>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button><a href="{{ route('welcome') }}">logout</a></button>
            </form>

        </ul>
    </nav>

    @yield('main-section')

    <footer class="mt-4">
        <span>ADMIN PANEL</span>
    </footer>
</body>

</html>
