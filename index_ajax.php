<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div v-for="disco in dischi">
            <div><img :src="disco.poster" alt=""></div>
            <div>
                {{disco.title}}
            </div>
            <div>
                {{disco.author}}
            </div>
            <div>
                {{disco.year}}
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
</body>
</html>