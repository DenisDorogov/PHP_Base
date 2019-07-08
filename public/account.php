<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Account</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js">
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--    <script src="allPages.js"></script>-->
<!--    <script src="cart.js"></script>-->


</head>

<body>
<div class="container">
    
    <?php
    include __DIR__ . '/../config/const.php';
    include TEMPLATES_DIR . 'header.php';
    include TEMPLATES_DIR . 'navigation.php';
//    include TEMPLATES_DIR . 'arrivals.php';
    include TEMPLATES_DIR . 'account.php';
    ?>
    
    
    
    
    
    
    <?php
//    include TEMPLATES_DIR . 'catalog.php';
//    include TEMPLATES_DIR . 'banner2.php';
//    include TEMPLATES_DIR . 'info-sbsr.php';
    include TEMPLATES_DIR . 'container-lower.php';
    include TEMPLATES_DIR . 'footer.php';
    ?>
      <script src="cart.js"></script>
    <script src="catalog.js"></script>  <!--  Подключили файл.-->
      
</div>


</body>

</html>