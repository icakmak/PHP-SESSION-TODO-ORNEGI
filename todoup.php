<?php
session_start();

?>
<style>
    .btn{
        background-color: #1456fc; /* Green */
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
    <form action="index.php" method="POST">
        <input type="hidden" name="todoId" value="<?php echo $_GET['todoId']?>">
        <div class="">
            <label for="todoTitle">Todo Title</label>
            <input type="text" name="todoTitle" placeholder="Todo Title" value="<?php echo $_SESSION['todoList'][$_GET['todoId']]['todoTitle']?>">
        </div>
        <div class="">
            <label for="todoText">Todo Text</label>
            <input type="text" name="todoText" placeholder="Todo Title" value="<?php echo $_SESSION['todoList'][$_GET['todoId']]['todoText']?>">
        </div>
        <div class="">
            <label for="todoStart">Start Date</label>
            <input type="date" name="todoStart" placeholder="Todo Title" value="<?php echo $_SESSION['todoList'][$_GET['todoId']]['todoStart']?>">
        </div>
        <div class="">
            <label for="todoFinish">Finish Date</label>
            <input type="date" name="todoFinish" placeholder="Todo Title" value="<?php echo $_SESSION['todoList'][$_GET['todoId']]['todoFinish']?>">
        </div>
        <div class="center">
            <button type="submit" class="btn">TODO UPDATE</button>
        </div>


    </form>

</div>