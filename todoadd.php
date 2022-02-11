<?php
/*

if($_GET){
    session_start();
    $todoId=uniqid();

    $todo=array(
            "todoId"=>$todoId,
            "todoTitle"=>$_GET['todoTitle'],
            "todoText"=>$_GET['todoText'],
            "todoStart"=>$_GET['todoStart'],
            "todoFinish"=>$_GET['todoFinish'],
    );



    $_SESSION['todoList'][$todoId]=$todo;
    header("location:todoinsert.php");
}
//print_r($_SESSION);
//session_unset();*/
?>
<style>
    .btn{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        width: 80%;
        min-width: auto;
        align-self: center;
    }
    input[type=text],input[type=date] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    .container{
        width: 80%;
        margin: auto;
        padding: 10%;
    }
    label{
        font-weight: bold;
    }
    .center{
        width: 80%;
        margin: auto;
        text-align: center;
    }
</style>
<div class="container">
    <h4>Todo Add Form</h4>
    <hr>
    <form action="index.php" method="post">
        <input type="hidden" name="todoId" value="<?php echo uniqid();?>">
        <div class="">
            <label for="todoTitle">Todo Title</label>
            <input type="text" name="todoTitle" placeholder="Todo Title">
        </div>
        <div class="">
            <label for="todoText">Todo Text</label>
            <input type="text" name="todoText" placeholder="Todo Title">
        </div>
        <div class="">
            <label for="todoStart">Start Date</label>
            <input type="date" name="todoStart" placeholder="Todo Title">
        </div>
        <div class="">
            <label for="todoFinish">Finish Date</label>
            <input type="date" name="todoFinish" placeholder="Todo Title">
        </div>
        <div class="center">
            <button type="submit" class="btn">TODO ADD</button>
        </div>


    </form>

</div>
