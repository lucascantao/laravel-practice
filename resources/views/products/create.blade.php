<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">name</label>
            <input type="text" name="name" placeholder="name" />
        </div>
        <div>
            <label for="qty">qty</label>
            <input type="number" name="qty" placeholder="qty" />
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price" placeholder="price" />
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" name="description" placeholder="description" />
        </div>
        <div>
            <input type="submit" value="create">
        </div>
    </form>
</body>
</html>