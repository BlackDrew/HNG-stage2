<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to HNG Internship</title>
    <link rel='stylesheet' href='style.css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
</head>
<body>
    <?php
        $the_date = date("l, F j Y");
        $the_time = date("g:i");
        $meridian = date("a");
    ?>
    <header class='header_text'>Welcome to HNG Internship!</header>

    <div class='container'>
        <p class='date'><?php echo $the_date; ?></p>
        <p class='time'><?php echo $the_time; ?></p>
        <p class='meridian'><?php echo $meridian; ?></p>
    </div>
    

</body>
</html>