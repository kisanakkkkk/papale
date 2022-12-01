<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('createMasuk')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id="">

        <label for="">Company</label>
        <input type="text" name="company" id="">

        <label for="">Price</label>
        <input type="text" name="price" id="">
        
        <label for="">Description</label>
        <input type="text" name="description" id="">

        <button>Submit</button>
    </form>

</body>
</html>