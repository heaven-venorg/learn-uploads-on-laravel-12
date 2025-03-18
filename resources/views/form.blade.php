<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">File</label><br>
        <input type="file" name="file" required><br>
        <input type="submit" value="Kirim Data" name="submit">
    </form>
    @if (session('alert'))
        <div>{{ session('alert') }}</div>
    @endif
</body>

</html>
