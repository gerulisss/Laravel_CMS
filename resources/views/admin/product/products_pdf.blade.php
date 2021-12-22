<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>ZMFOOD Products</h2>
<img alt="Logo" src="http://zmfood.eu/wp-content/uploads/2019/03/zmfood-logo.png" width="45px" class="h-15px" />
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Url</th>
        <th>Sub Category Name</th>
        <th>Category Name</th>
    </tr>
                    @foreach ($products as $product)


        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->slug}}</td>
            <td>{{ $product->subcategory->name }}</td>
            <td>{{ $product->subcategory->category->name }}</td>
        </tr>
                      @endforeach
</table>

</body>
</html>

