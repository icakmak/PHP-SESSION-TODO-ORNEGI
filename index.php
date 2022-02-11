<?php session_start();
if($_POST) {
    //header("location:todoinsert.php");

    $todo = array(
        "todoId" => $_POST['todoId'],
        "todoTitle" => $_POST['todoTitle'],
        "todoText" => $_POST['todoText'],
        "todoStart" => $_POST['todoStart'],
        "todoFinish" => $_POST['todoFinish'],
    );

    $_SESSION['todoList'][$_POST['todoId']] = $todo;
}
//session_unset();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO LİST</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            padding: 5px;
        }
        thead{
            font-weight: bold;

        }
        .container{
            margin: auto;
            width: 80%;
            padding: 10px;
        }
        .btn-red{
            float: left;
            background-color: #ff0000; /* Green */
            color: #FFFFFFFF;
            padding: 5px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;

        }
        .btn-yellow{
            float: right;
            background-color: #f6c307; /* Green */
            color: #000000;
            padding: 5px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;

        }
        .btn-green{
            float: right;
            background-color: #0ff607; /* Green */
            color: #000000;
            padding: 5px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;

        }
    .row{
        display: inline-block;
        text-align: center;
    }
    </style>
</head>
<body class="container">
<span>Todo List</span>
<a href="todoadd.php" class="btn-green">Todo Add</a>
<hr>
<?php
if($_GET){
    unset($_SESSION['todoList'][$_GET['sil']]);
    header("location:index.php");
}
?>
<table border="1px">
    <thead>
        <tr>
            <!--<th type="hidden">#</th>-->
            <th style="width: 10%">Title</th>
            <th style="width: 50%">Text</th>
            <th style="width: 10%">Start</th>
            <th style="width: 10%">Finish</th>
            <th style="width: 13%">#</th>
        </tr>
    </thead>
    <tbody>
    <?php if($_SESSION){ foreach($_SESSION['todoList'] as $todo){ ?>
        <tr>
            <!--<td type="hidden"><?php echo $todo['todoId']; ?></td>-->
            <td><?php echo $todo['todoTitle']; ?></td>
            <td><?php echo $todo['todoText']; ?></td>
            <td style="text-align: center;"><?php echo $todo['todoStart']; ?></td>
            <td style="text-align: center;"><?php echo $todo['todoFinish']; ?></td>
            <td style="text-align: center;">
                <div class="row">
                    <a href="index.php?sil=<?php echo $todo['todoId']; ?>" class="btn-red">Trash</a>
                    <a href="todoup.php?todoId=<?php echo $todo['todoId']; ?>" class="btn-yellow">Update</a>
                </div>

            </td>

        </tr>
    <?php }}?>
    </tbody>
</table>

</body>
</html>