<?php
session_start();
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
?>

<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="logo-puskesmas.png" type="image/x-icon">
    <title>Chat App | Puskesmas Godean 2</title>
</head>

<body>
    <div class="wrapper">
        <?php
       include_once "php/config.php";
       $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
       if(mysqli_num_rows($sql) > 0){
         $row = mysqli_fetch_assoc($sql);
       }
        ?>
        <section class="users">
            <header>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="" />
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Log Out</a>
            </header>
            <div class="search">
                <span class="text">Cari pengguna untuk memulai Chat</span>
                <input type="text" placeholder="Masukkan nama untuk mencari..." />
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                
            </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
</body>

</html>