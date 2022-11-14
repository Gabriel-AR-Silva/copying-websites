<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Netflix</title>
    <style>
        body{
            background-color: khaki;
        }
        h1{
            text-align: center;
        }
        .container{
            position:absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .input-label-box{
            display: flex;
            flex-direction: column;
        }
        
        input{
            width: 300px;
            height: 25px;
            outline-style: none;
        }

        input:focus{
            border: 2px solid black;
        }

        input::placeholder{
            font-style: italic;
        }

        .btn-submit{
            width: 100px;
            height: 30px;
            margin: 20px auto 0;
            cursor: pointer;
        }
    </style>
</head>
<body>  
    <div class="container">
        <h1>Registration</h1>
        <form action="resgitration-db.php" method="post">
            <div class="input-label-box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name.." required autofocus>
            </div>
            <div class="input-label-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email.." required>
            </div>
            <div class="input-label-box">
                <label for="tel">Phone</label>
                <input type="tel" name="tel" id="tel" placeholder="Phone number..">
            </div>
            <div class="input-label-box">
                <label for="passw">Password</label>
                <input type="password" name="passw" id="passw" placeholder="Password.." required>
            </div>
            <button type="submit" class="btn-submit">Cadastrar</button>
        </form> 
        <a href="login.php">Sign In??</a>
    </div>
    
</body>
</html>