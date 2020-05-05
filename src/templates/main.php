<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo( $title ?? '(no title)' )?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">OMAS AJIRI</a>

    <div class="collapse navbar-collapse hide">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">BIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">SKILL</a>
            </li>
        </ul>
    </div>
</nav>
    <main class="container">
    <?php if(isset($content)){
        $content;
    }else { ?>
    <div class="row">
      <div class="writeup">
        <h1>Welcome to the profile</h1>
        <p>Feel free when browsing through the content</p>
    </div>
    </div>
   <?php } ?>
   <?php echo "<img src='../assets/profilepic.jpg' alt='my-profile pic'>";?>

</main>
</body>
</html>