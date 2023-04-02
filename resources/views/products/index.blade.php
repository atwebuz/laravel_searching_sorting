<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Document</title>
</head>
<body>
    <div class="container mt-5">    
        <form action="" method="get" class="py-3">
            <label for="sort_by">Sort by:</label>
            <select name="sort_by" id="sort_by" class="form-select form-select-lg mb-3">
                <option value="name">Name</option>
                <option value="price">Price</option>
                <option value="created_at">Date created</option>
            </select>
            <button type="submit" class="btn btn-primary px-3">Sort</button>
        </form>


    <table class="table table-success table-striped-columns">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Date created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    
      {{$products->links()}}

    </div>
    
</body>
</html>