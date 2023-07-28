<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <p>Best rated is :</p
                <h3 class="productName">Productname</h3>
                <p class="rating">with score of : {"rating[rating.length]"}</p>
                <article class="productDesc">
                    Desc
                </article>
            </div>
        </section>
        <section id="other-data">
            <p>Other  reviews: </p>
            {"data"}
        </section>
    </div>

</body>
</html>
<style>
    .wrap
    {
        width: auto;
        border:  5px solid red;
    }
    .wrap section > div
    {
        display: flex;
        flex-direction: column;   
        border:  green 3px dotted;
    }
</style>