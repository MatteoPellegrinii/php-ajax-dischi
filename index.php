<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
<div id="app">
    <div class="contenitore">
        <div class="disc" v-for="post in arrayDisc">
            <img :src="post.poster"> 
            <h4>{{post.title}} </h4>
            <h5>{{post.author}} </h5>
            <h6>{{post.genre}}, {{post.year}} </h6>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="assets/script.js"></script>
</body>
</html>