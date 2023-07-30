<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>reviews</title>
</head>
<body>
    <div class="wrap">
        <section id="data">
            <div class="best">
                <p>Best rated is :</p>
                <h3 class="productName">Productname</h3>
                <p class="rating">with score of : {"rating[0]"}</p>
                <article class="productDesc">
                    Desc
                </article>
            </div>
            <div class="worst">
                <p>Best rated is :</p>
                <h3 class="productName">Productname:</h3>
                <p class="rating">with score of : {"rating[rating.length]"}</p>
                <article class="productDesc">
                    Desc
                </article>
            </div>
        </section>
        <section id="other-data">
            <p>Other  reviews: </p>
            <?php use App\Http\Controllers\ReviewController;
            $class = new ReviewController();
            ?>
        </section>
       
    </div>

</body>
</html>
