<?php include __DIR__."/partials/header.php"; ?>

<body>
    <main class="container">
        <nav class="tabs">
            <div>
                <a id="demo" class="tabs__tab--selected" href="">To-do</a>
                <a class="tabs__tab" href="">Done</a>
            </div>
            <button id="new_todo" class="button--primary">Přidat nový úkol +</button>
        </nav>

        <?php

        $todos = [
            [
                "title" => "Zajít nakoupit",
                "description" => "Zajdi do obchodu a kup máslo",
                "done" => true,
            ],
            [
                "title" => "Zajít se psem",
                "description" => "Vyvenčiho kolem baráku alespoň na 10 minut.",
                "done" => false,
            ],
        ];

        foreach ($todos as $todo) {
            echo '
            <article class="todo'; if($todo['done']) echo "--done";  echo '">
                <div>
                    <img src="" class="todo__img" alt="">
                    <h1 class="todo__headline">' . $todo['title'] . '</h1>
                    <p class="todo__description">' . $todo['description'] . '</p>
                </div>
                <div>';

                if($todo['done']){
                    echo '<button class="button--error">Smazat</button>';
                }else{
                    echo '<button class="button--success">Hotovo</button>';
                }
                    
                  echo ' </div>
                  </article>';
            }
        ?>
    </main>

    <div class="modal-overlay">
        <form action="" class="form">
            <h1 class="form__headline">Nový úkol</h1>
            <input id="todo_input" type="text" required>
            <input type="text" class="input--error" required>
            <button class="button--primary" type="submit">Přihlášení</button>
        </form>
    </div>

    <script src="../script.js"></script>
    <script src="../modal.js"></script>
</body>

</html>