<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <style>.rounded{margin: 0 20px 20px 0; box-shadow: 0 0 10px #666}</style>

    <title>Lesson 4</title>
  </head>
  <body>
       <div class="container1243" style="width: 1000px; margin: 30px auto; background-color: #aaa; ">
           <?php
           $imgArray = [
                1 => ['auto_01'],
                2 => ['auto_02'],
                3 => ['auto_03'],
                4 => ['auto_04'],
                5 => ['auto_05'],
                6 => ['auto_06'],
                7 => ['auto_07'],
                8 => ['auto_08'],
                9 => ['auto_09']
            ];
           foreach($imgArray as $img):?>
           <a href="img/originals/<?=$img[0]?>.jpg"><img src="img/min/<?=$img[0]?>min.jpg" class="rounded float-left" alt="..."></a>
           
           <?php endforeach ?>
           <div src="#" class="rounded float-right" alt="Заглушка" stile="width 300px; height=10px"></div>
       </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>