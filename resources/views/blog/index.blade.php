<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="">
        <label for="title">Title</label>
        <input type="text" name="title">
        <label for="descriptions">Descriptions</label>
        <input type="text" name="descriptions">
    </form> -->
    @foreach($blog as $blog)
        <p>{{$blog->title}}</p>
    @endforeach
    
</body>
</html>