<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>

        input {
            margin: 5px;
        }
        a {
            color: green;
        } 
        .hiden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="content">
            <div class="form_row">
                <form action="Select.php" method="post" class="form" id='form2'>
                    <h2>Количество подчиненных каждого шефа</h2>
                    <input name="name_chief" class="form__input" type="text" placeholder=" имя шефа">
                    <button name='main__button' id="button">Ввести</button>
                </form>
                    <a id="first"  href="#">Show last</a>

            </div>

        <div class="second__row">
            <div class="form_row">
                <form action="Select__Time.php" method="post" class="form" id='form3'>
                    <h2>Количество проэктов указанного руководителя</h2>
                    <input id='name' name="name_project_for_time" class="form__input" type="text"
                        placeholder=" имя руководителя">
                    <button name='main__button' id="button">Ввести</button>
                </form>
                <p id="p_two"></p>
            </div>


            <div class="form_row">
                <form action="SelectProjectOnDate.php" method="post" class="form" id='form4'>
                    <h2>информация по выполненым задачам на указанный проэкт п овыбраной дате</h2>
                    <input id="name_project_for_date" name="name_project_for_date" class="form__input" type="text"
                        placeholder=" имя проэкта">
                    <input id='date' name="date" class="form__input" type="date" placeholder=" дата">
                    <button name='main__button' id="button">Ввестиa</button>
                </form>
                <p id="p_tree"></p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "js.js"></script>
</body>

</html>