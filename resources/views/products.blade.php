<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <div id="product-list">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/products',
                method: 'GET',
                success: function(data) {
                    let productList = $('#product-list');
                    productList.empty();

                    data.forEach(function(product) {
                        let productHtml = `
                            <div class="product">
                                <div>
                                    <h2>${product.name}</h2>
                                    <p>${product.description}</p>
                                </div>
                                <div class="price">$${product.price}</div>
                            </div>
                        `;
                        productList.append(productHtml);
                    });
                }
            });
        });
    </script>
</body>
</html>
