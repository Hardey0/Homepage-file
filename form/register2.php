<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .container{
            height: 60vh;
            width: 30vw;
            border: 2px solid black;
            align-items: center;
            justify-content: center;
            /* align-items: center; */
            padding-left: 9rem;
            margin-left: 34rem;
            margin-top: 13rem;
            /* flex: dipla; */

        }
        form{
            align-items: center;
            justify-content: center;
            padding-top: 2rem;
            justify-content: space-between;
            gap: 3rem;
            margin-top: 2rem;
            padding-left: 3.2rem;


        }
        input{
            display: inline-block;
            margin-top: 1.2rem;
            padding-top: 0.3rem;
            width: 14rem;
        }
        h1{
            position: relative;
            margin-top: -2rem;
            padding-top: -4rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-family: bolder;
        }
        p{
            margin-top: 1rem;
            margin-left: -1.9rem;
            letter-spacing: 0.2rem;
        }
        label{
            margin-left: -7rem;
            font-size: 1.4rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bolder;
            /* box-shadow: 1px 0px 0px 1px; */
         }
        .name{
            margin-left: 1.0rem;
            height: 1.7rem;
            border: 1.5px solid black;
            width: 19rem;
            border-radius: 1px;
        }
        .name:hover{
            border: 3px solid black;
        }
        ::placeholder{
            padding-left: 1.2rem;
            font-size: medium;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
        .gender{
            margin-left: -5rem;
            height: 2rem;
            border: 1px solid black;
            width: 7rem;
        }
        .nam{
            margin-left: 1.4rem;
            height: 1.7rem;
            border: 1.5px solid black;
            width: 19rem;
            border-radius: 1px;
        }
        .nam:hover{
            border: 2px solid black;
            cursor: pointer;
        }
        
    </style>
</head>

<body>
<?php
if(isset($GET['err'])){
    $error = $_GET['err'];
    echo "<h3 style = 'color:red'>$error</h3>";
}
?>
    <div class="container">
    <form method="post" action="process2.php">
            <h1>REGISTRATION FORM</h1>
            <p>kindly fill this form to get registrated</p>
            <label for="firstname">firstname:</label>
            <input type="text" name="firstname" class="name" placeholder="firstname" required><br><br>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname"  class="name" placeholder="lastname" required><br><br>
            <label for="email">Email:</label>
            <input type="text" name="email"  class="name" placeholder="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password"  class="name" placeholder="password" required><br><br>
            <label for="confirm_password">Confirm password:</label>
            <input type="password" name="confirm_password"  class="name" placeholder="confirm password"><br> <br>
            <select name="gender"  class="gender" id="gender" name="gender"><br>
                <option selected>MALE</option>
                <option value="1">FEMALE</option>
                <option value="2">OTHER</option>
            </select> <br>
            <input type="submit" name="REGISTRATION"  class="nam"  value="REGISTRATION">
        </form>
    </div></div>
</body>
</html>