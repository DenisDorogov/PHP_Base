<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .rounded {
            margin: 0 20px 20px 0;
            box-shadow: 0 0 10px #666
        }

    </style>

    <title>Lesson 6</title>
</head>

<body>
    <div class="container1243" style="width: 1000px; margin: 30px auto; padding: 30px; background-color: #aaa; ">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Первый операнд</label>
                <input name="operand1" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите число">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Второй операнд</label>
                <input name="operand2" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Введите число">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select name="operate" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Выберете операцию</option>
                        <option value="<?=$operate="sum"?>">Сложить</option>
                        <option value="<?=$operate="dif"?>">Вычесть</option>
                        <option value="<?=$operate="mult"?>">Умножить</option>
                        <option value="<?=$operate="div"?>">Разделить</option>
                    </select>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button name="operate" type="submit" class="btn btn-secondary" value="<?=$operate="sum"?>">+</button>
                    <button name="operate" type="submit" class="btn btn-secondary" value="<?=$operate="dif"?>">-</button>
                    <button name="operate" type="submit" class="btn btn-secondary" value="<?=$operate="mult"?>">*</button>
                    <button name="operate" type="submit" class="btn btn-secondary" value="<?=$operate="div"?>">/</button>
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Вычислить</button>
                </div>
            </div>
        </form>
        <?php
            $operate = $_GET['operate'] ?? NULL; 
            $operand1 = $_GET['operand1'] ?? NULL; 
            $operand2 = $_GET['operand2'] ?? NULL; 
            function mathOperation($var1, $var2, $operate) {
                switch($operate) {
                    case 'sum':
                        return $var1 + $var2;
                        break;
                    case 'dif':
                        return $var1 - $var2;
                        break;
                    case 'mult':
                        return $var1 * $var2;
                        break;
                    case 'div':
                        if ($var2 == 0) {
                            return ("На ноль делить нельзя");
                            break;
                        }
                        else {
                            return $var1 / $var2;
                            break;
                        };
                }
            };        
            $result = mathOperation($operand1, $operand2, $operate);
            ?>
        <div class="alert alert-light" role="alert">
            <?=$result?>
        </div>
        
        <!--Шаблон для проекта-->
        
        <h2>Шаблон с отзывами</h2>
            <?php
           $mysql = mysqli_connect('php.base', 'root', '', 'shop');
           
           $query = mysqli_query($mysql, "SELECT * FROM responses");
           
           $responses = [];
           while ($row = mysqli_fetch_assoc($query)) {
            $responses[] = $row;
           };
           mysqli_close($mysql);
              
           foreach($responses as $response):?>
               <div class="card" style="width: 18rem; margin-bottom: 20px;">
                   <div class="card-body">
                       <h5 class="card-title"><?=$response['name']?></h5>
                       <p class="card-text"><?=$response['text']?></p>
                   </div>
               </div>
           <?php endforeach ?>
        <form>
            <div class="form-group">
               <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Введите имя">
                <label for="exampleFormControlTextarea1">Оставьте свой отзыв:</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
        <?php
            $resText = $_GET['text'] ?? NULL;
            $resName = $_GET['name'] ?? NULL;
            $mysql2 = mysqli_connect('php.base', 'root', '', 'shop');
            if ($resName) {
            $query2 = mysqli_query($mysql2, "INSERT INTO `shop`.`responses` (`name`, `text`) VALUES ('$resName', '$resText')");
            print_r($query2);
            }
            mysqli_close($mysql2);
            $resText = NULL;
            $resName = NULL;
        ?>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
