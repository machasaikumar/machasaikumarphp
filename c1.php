<?php
include 's1.php';

?>


<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-
to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dis
t/css/bootstrap.min.css" integrity="sha384-
B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="an
onymous">
<title>Hello, world!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>


<a class="nav-link" href="#">Home</a>
<a class="nav-link" href="#">profile</a>
<a class="nav-link" href="#">about us</a>
<a class="nav-link" href="#">contact us</a>

<form class="form-inline my-2" >

<input class="form-control"
 type="search" placeholder="Search" aria-label="Search">

<button class="btn btn-outline-success  type="submit">Search</button>

</form>
<?php
// $a1=$_POST['user'];
echo $_SESSION['f1'];

?>
</div>
</nav>

</body>
</html>