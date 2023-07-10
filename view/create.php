<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="view/style.css" rel="stylesheet">
</head>
<body class="main">
    <div class="container">
        <div class="menu">
            <div class="btns">
            <form action="/add" method="POST">
                <button type="submit" >Add DB</button>
            </form>
            <form action="/table" method="POST">
                <button type="submit" >Add Table</button>
            </form>
            </div>

        </div>
            <div class="fields">
                    <?php if($_SERVER['REQUEST_URI'] == "/add"):?>
                        <form action="/store" method="POST" enctype="multipart/form-data" class="filling">
                            <div class="inp1">
                                <label for="">DB Name</label>
                                <input type="text" placeholder="Db Name" class="inpname" name="DBname" required>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    <?php endif;?>
                    <?php if($_SERVER['REQUEST_URI'] == "/table"):?>
                        <form action="/insertcolumns" method="POST" enctype="multipart/form-data" class="filling">
                            <div class="inp1">
                                <label for="">DB Name</label>
                            <select name="db" id="" class="dbselect">
                                <?php foreach($alldbnames as $key=>$names):?>
                                    <option value="<?php echo $names['Database'];?>" name="dbnames"><?php echo $names['Database'];?></option> 
                                <?php endforeach;?>
                                </select>
                                <div class="">
                                    <label for="">Table Name</label>
                                    <input type="text" placeholder="Table Name" class="inpname" name="tablename">
                                </div>
                                <div class="allcolumns">
                                    <div class="list">
                                        <label for="" class="columnnames">column Name</label>
                                        <input type="text" placeholder="column Name" class="colname" name="0">
                                        <select name="0" id="" class="type">
                                            <option value="int" name="dbnames">int</option> 
                                            <option value="varchar(255)" name="dbnames">varchar(255)</option> 
                                            <option value="DateTime" name="dbnames">DateTime</option> 
                                            <option value="text" name="dbnames">text</option> 
                                        </select>
                                    </div>
                                

                                </div>
                                <button type="submit" class="sumbtn">Submit</button>
                                </div>
                                </form>
                            </div>
                        
                          

                            <?php endif;?>
                            <button class="addbtn">Add column</button>

                </div>
    <script src="script.js"></script>
</body>
</html>

