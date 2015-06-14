<?php 
    include 'database.php';
?>
<?php 
    //Create Select Query
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SHOUT IT!</title>
        <link rel="stylesheet" href="css/style.css" text="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
                <div id="shouts">
                    <ul>
                        <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                           <li class="shout"><span><?php echo $row['time'];?> -</span><strong><?php echo $row['user']; ?></strong>: <?php echo $row['message']; ?></li> 
                        <?php endwhile; ?>                   
                    </ul>
                </div>
                <div id="input">
                    <?php if(isset($_GET['error'])): ?>
                        <div class="error_cls"><?php echo $_GET['error'];?></div>
                    <?php endif;?>
                    <form method="post" action="process.php">
                        <input type="text" name="user" placeholder="enter your name"/>
                        <input type="text" name="message" placeholder="Enter a message"/>
                        <br/>
                        <input class="shout-btn" type="submit" name="submit" value="Shout It Out"/>
                    </form>
                </div>
            </header>
        </div>
    </body>
</html>
