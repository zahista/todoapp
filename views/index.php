<?php include __DIR__."/partials/header.php"; 


$error = $_GET['error'] ?? null;

$errors = 
[
    "wrong_credentials"=>"Špatné přihlašovací údaje",
    "not_email"=>"Pro přihlášení musíte použít email",
]

?>

<body>
    <head class="header">
    </head>

    <main class="container--center">
        <form action="/PCS2023/TodoApp/controllers/checkUserInDatabase.php" class="form" method="post">
            <h1 class="form__headline">Přihlásit se</h1>
            <input type="text" name="email" placeholder="Email">
            <?php 
            if(isset($error))
            {
                echo'
                <p class="form__error-message">'.$errors[$error].'</p>
                ';
            }
            ?>
            <input type="text" name="password" placeholder="Heslo">
            <button class="button--primary" type="submit">Přihlášení</button>
            <div class="form__footer">
                <p>Nemáte účet? <a href="/PCS2023/TodoApp/views/register.html">Vytvořte si ho</a></p>
            </div>
        </form>
    </main>
</body>
</html>