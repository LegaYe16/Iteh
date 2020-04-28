<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="first__row">

<?php
    require 'config.php';
?>


            <div class="form_row">
                <form action="Select.php" method="post" class="form" id='form2'>
                    <h2>The number of subordinates of each chief</h2>
                    <input name="name_chief" class="form__input" type="text" placeholder=" Name chief">
                    <button name='main__button' id="button">Enter</button>
                </form>
                <p id='p_one'></p>
            </div>
        </div>

        <div class="second__row">
            <div class="form_row">
                <form action="Select__Time.php" method="post" class="form" id='form3'>
                    <h2>Total time spent on the selected project</h2>
                    <input id='name' name="name_project_for_time" class="form__input" type="text"
                        placeholder=" Name project">
                    <button name='main__button' id="button">Enter</button>
                </form>
                <p id="p_two"></p>
            </div>


            <div class="form_row">
                <form action="SelectProjectOnDate.php" method="post" class="form" id='form4'>
                    <h2>Information on completed tasks for the specified project on the selected date</h2>
                    <input id="name_project_for_date" name="name_project_for_date" class="form__input" type="text"
                        placeholder=" Name project">
                    <input id='date' name="date" class="form__input" type="text" placeholder=" Data">
                    <button name='main__button' id="button">Enter</button>
                </form>
                <p id="p_tree"></p>
            </div>
        </div>
    </div>
</body>

</html>