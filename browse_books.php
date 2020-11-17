<DOCTYPE html>

<html>
    <link rel="stylesheet" type="text/css" href="style4.css">
    <head>
    
    
        <title>Browse Books</title>
        
        <?php

            session_start();
        
            if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    

        ?>
        
        <h3> Hello, <?php echo $_SESSION['name']; ?></h3>
        <a href="logout.php" class="b2">Logout</a>
        
        
        
        <?php
            }else{
                header("Location: test.php");
            exit();
            }

        ?>
        
        
        
        <h1>Online Library</h1>
        <h2>Browse Books</h2>
    </head>
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
</html>










</DOCTYPE>