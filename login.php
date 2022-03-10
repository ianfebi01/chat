<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="logo-puskesmas.png" type="image/x-icon">
    <title>Chat App | Puskesmas Godean 2</title>
</head> -->

<body>
    <div class="wrapper">
        <section class="form login">
            <header>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="307" height="83" viewBox="0 0 307 83">
                        <g id="Group_1" data-name="Group 1" transform="translate(-530 -228)">
                            <path id="Rectangle_3" data-name="Rectangle 3"
                                d="M29,0H137a0,0,0,0,1,0,0V38a29,29,0,0,1-29,29H29A29,29,0,0,1,0,38V29A29,29,0,0,1,29,0Z" transform="translate(545 228)"
                                fill="#30699d" />
                            <path id="Rectangle_4" data-name="Rectangle 4"
                                d="M0,0H108a29,29,0,0,1,29,29V39a29,29,0,0,1-29,29H29A29,29,0,0,1,0,39V0A0,0,0,0,1,0,0Z" transform="translate(530 243)"
                                fill="#3ba48b" />
                            <text id="Chat_" data-name="Chat!" transform="translate(708 284)" fill="#4f4f4f" font-size="45"
                                font-family="Poppins-SemiBold, Poppins" font-weight="600">
                                <tspan x="0" y="0">Chat!</tspan>
                            </text>
                            <circle id="Ellipse_7" data-name="Ellipse 7" cx="8" cy="8" r="8" transform="translate(565 269)" fill="#fff" />
                            <circle id="Ellipse_8" data-name="Ellipse 8" cx="8" cy="8" r="8" transform="translate(591 269)" fill="#fff" />
                            <circle id="Ellipse_9" data-name="Ellipse 9" cx="8" cy="8" r="8" transform="translate(617 269)" fill="#fff" />
                            <text id="Puskesmas_Godean_2" data-name="Puskesmas Godean 2" transform="translate(713 304)" fill="#4f4f4f" font-size="11"
                                font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">Puskesmas Godean 2</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
                
            </header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <!-- <label>Email</label> -->
                    <input type="text" name="email" placeholder="Masukkan email Anda" />
                </div>
                <div class="field input">
                    <!-- <label>Password</label> -->
                    <input type="password" name="password" placeholder="Masukkan password Anda" />
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field submit">
                    <input type="submit" value="Continue to Chat" />
                </div>
            </form>
            <div class="link">
                Belum punya akun?<a href="index.php"> Daftar Disini!</a>
            </div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>