
<?php include __DIR__."/partials/header.php"; ?> 

<body>

    <head class="header">
    </head>

    <main class="container--center">
        <form action="" class="form">
            <h1 class="form__headline">Registrace</h1>
            <input type="text" name="email" placeholder="Email" >
            <input type="text" name="Password" placeholder="Heslo">
            <input type="text" name="Password" placeholder="Potvrdit heslo">
            <button class="button--primary" type="submit">Vytvořit účet</button>
            <div class="form__footer">
                <p>Již máte účet? <a href="/PCS2023/TodoApp/views/login.php">Přihlaste se</a></p>
            </div>
        </form>
    </main>

</body>

</html>