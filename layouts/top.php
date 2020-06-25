<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenny's blog - <?=$_SERVER['REQUEST_URL'] ?? ''?></title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans+KR:400,500&display=swap&subset=korean">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="/blog/app.css">
</head>
<body>
    <div id="app">
        
        <nav id="nav" role="navigation" class="uk-navbar-container uk-navbar-transparent uk-padding uk-padding-remove-vertical uk-margin-bottom" uk-navbar>
            <div class="ul-navbar-left">
                <h1>Jenny's Blog</h1>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a href="/blog">Home</a></li>
                    <li><a href="/blog/user/register.php">Register</a></li>
                    <?php if (array_key_exists('user', $_SESSION)) : ?>
                        <li><a href="/blog/user/update.php">My Page</a></li>
                        <li><a href="/blog/post/write.php">Write</a></li>
                        <li><a href="/blog/auth/logout.php">Sign out</a></li>
                    <?php else : ?>
                        <li><a href="/blog/auth/login.php">Sign in</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>  

        <main id="main" role="main">
        