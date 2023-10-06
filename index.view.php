<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body style="text-align: center;">
    <h1>Book List</h1>
    <ul style="width: 150px; margin: 0 auto;">
        <?php foreach($books as $jhs): ?>  
           <li> <?php echo $jhs ?> </li> 
        <?php endforeach ?>
    </ul>
</body>
</html>