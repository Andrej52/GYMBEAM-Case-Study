<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>revriews-view</title>
</head>
<body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="products-info">Not rated</a></li>
                <li><a href="rated">Rated</a></li>
            </ul>
        </nav>
    <div class="wrap">
        <section>
            <h3> Products : </h3>
            {{ \App\Helpers\classLoader::controllerinstance()->printData(false) }}
        </section>
    </div>
 
</body>
</html>