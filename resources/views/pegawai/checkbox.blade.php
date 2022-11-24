<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form method="POST" class="box box-success">
        @csrf
        <label><input type="checkbox" name="isian[]" value="jeruk">Jeruk</label>
        <label><input type="checkbox" name="isian[]" value="pisang">Pisang</label>
        <label><input type="checkbox" name="isian[]" value="mangga">Mangga</label>
        <label><input type="checkbox" name="isian[]" value="anggur">Anggur</label>
        <br>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</body>
</html>