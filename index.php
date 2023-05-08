<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

<section id="app">

    <div class="container m-auto text-center">
        <div class="row ">
            <div class="col">
                <h1 class="p-2 title text-secondary">Todo List</h1>
            </div>

        </div>
        <div class="row d-flex flex-column align-items-center m-auto">
            <div class="col p-3 m-3">
                <ul class="list-group">
                    <li class="list-group-item" v-for="task in tasks">{{task}}</li>

                </ul>

                <div class="add_task p-3">
                    <input type="text" v-model="new_task" @keyup.enter="add_task" placeholder="Inserisci l'lemento...se hai il coraggio">
                    <button type="submit" onclick="add_task">Inserisci</button>
                </div>

            </div>

        </div>
    </div>

</section>

<script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src='./app.js'></script>
</body>
</html>
