<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>reviews</title>
</head>
<body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="products-info">Not rated</a></li>
                <li><a href="rated">Rated</a></li>
            </ul>
        </nav>
        <section id="data">
            <div class="best">
                <p class="title">Best rated is :</p>
                <h3 class="productName">   {!!\App\Helpers\classLoader::controllerinstance()->data[0]['name']!!}</h3>
                <p class="rating">with score of:  {!!\App\Helpers\classLoader::controllerinstance()->data[0]['rating']!!} </p>
                <article class="productDesc">
                Description:    {!!\App\Helpers\classLoader::controllerinstance()->data[0]['desc']!!}
                </article>
            </div>
            <div class="worst">
                <p class="title">Worst rated is :</p>
                <h3 class="productName">Product: {!!\App\Helpers\classLoader::controllerinstance()->data[\App\Helpers\classLoader::controllerinstance()->size-1]['name']!!} </h3>
                <p class="rating">with score of : {!!\App\Helpers\classLoader::controllerinstance()->data[\App\Helpers\classLoader::controllerinstance()->size-1]['rating']!!}</p>
                <article class="productDesc">
                Description:    {!!\App\Helpers\classLoader::controllerinstance()->data[\App\Helpers\classLoader::controllerinstance()->size-1]['desc']!!}
                </article>
            </div>
        </section>
        <section id="other-data">
            <p class="title">Other  reviews: (Descending)</p>
            {{ \App\Helpers\classLoader::controllerinstance()->printData(true) }}
        </section>
</body>
</html>
