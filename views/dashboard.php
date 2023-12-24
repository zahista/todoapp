<?php Core\View::render('partials/header', ['title' => $title]) ?>

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
        <form action="/TodoApp/" class="form" method="post">
            <h1 class="form__headline">Nový úkol</h1>
            <input name="todo" id="todo_input" type="text" placeholder="Úkol" required>
            <input name="description" type="text" placeholder="Popis úkolu" required>
            <button class="button--primary" type="submit">Přidat úkol</button>
        </form>
    </div>

    <script src="/TodoApp/script.js"></script>
    <script src="/TodoApp/modal.js"></script>
</body>

</html>