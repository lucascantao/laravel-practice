<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <h1>Product</h1>
    <div>
        <table>
            <tr class="border">
                <th>id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
            </tr>
            @foreach($products as $product)
                <tr >
                    <td class="border">{{$product->id}}</td>
                    <td class="border">{{$product->name}}</td>
                    <td class="border">{{$product->qty}}</td>
                    <td class="border">{{$product->price}}</td>
                    <td class="border">{{$product->description}}</td>
                    <td class="border">
                        <a href="{{route('product.edit', ['product' => $product])}}" class="text-blue-500 underline">edit</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy', ['product' => $product])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>