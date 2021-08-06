<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Search List</title>
</head>
<body>
   
    <h1>Search List</h1>
    <form action="/ajax/searchlist.php" method="Get">
     <input type="text" name="username" value="">
    <input type="submit" name="search" value="Search">
    
     </form>
    <hr>
    <table><tr><th>Id</th><th>Username</th><th> Action</th></tr></table>
    <br>
    <input name="username" value="you">
    <br>
     <input name="username" value="root">
    <br>
    
    <span style="color:red"></span>
    <span style="color:green"></span>
    <br><br>
    <a href="Home.php">Home</a>

</body>
</html>