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

        <section class="chat-area">
            <header>

                <?php
              include_once "php/config.php";
              $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
                ?>
                <div class="header">
                    <a href="users.php" class="black-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="php/images/<?php echo $row['img'] ?>" alt="" />
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>

                        <p><?php echo $row['status'] ?></p>

                    </div>
                </div>

            </header>
            <div class="chat-box">
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here..." />
                <button><i class="">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26.741" height="22.416"
                            viewBox="0 0 26.741 22.416">
                            <defs>
                                <linearGradient id="linear-gradient" x1="0.613" y1="0.421" x2="0.805" y2="0.056" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#eff7fc" />
                                    <stop offset="1" stop-color="#fff" />
                                </linearGradient>
                            </defs>
                            <path id="path2993" d="M85.278,105.825c-.8,0-.656-.307-.942-1.065L82,97.056,96.506,88l1.7.451L96.793,92.3Z"
                                transform="translate(-75.224 -84.756)" fill="#c8daea" />
                            <path id="path2991"
                                d="M59.391,86.967l9.916,7.314c1.127.615,1.946.307,2.233-1.045l4.036-19.013c.41-1.66-.635-2.4-1.721-1.905L50.171,81.455c-1.619.656-1.6,1.557-.287,1.946l6.085,1.905,14.076-8.871c.656-.41,1.27-.184.779.266Z"
                                transform="translate(-48.926 -72.168)" fill="url(#linear-gradient)" />
                        </svg>

                    </i></button>
            </form>
        </section>
    </div>
    <script src="javascript/chat.js"></script>
</body>

</html>