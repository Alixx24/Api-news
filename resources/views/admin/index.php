<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue.js API</title>
</head>
<body>
    <div id="app">
        <h2>دسته‌بندی‌ها</h2>
        <ul>
            <li v-for="category in categories" :key="category.id">{{ category.name }}</li>
        </ul>
    </div>

    <script src="app.js"></script>
</body>
</html>