<!doctype html>
<html lang="ru">

<head>
    <title></title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/variable.css" rel="stylesheet">
    <link href="css/fonts/gilroy.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/specialization.css" rel="stylesheet">
    <link href="css/customers.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">
    <link href="css/pricing.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    
    <?php echo file_get_contents('sections/header.html'); ?>
    <?php echo file_get_contents('sections/specialization.html'); ?>
    <?php echo file_get_contents('sections/portfolio.html'); ?>
    <?php echo file_get_contents('sections/customers.html'); ?>
    <?php echo file_get_contents('sections/pricing.html'); ?>
    <?php echo file_get_contents('sections/footer.html'); ?>
   
</body>

</html>