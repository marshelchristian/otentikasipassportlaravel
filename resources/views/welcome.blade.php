<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File uploads</title>
</head>
<body>
    <form action="/uploads" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <p>
            <label for="photo">
                <input type="file" name="photo" id="photo">
            </label>
        </p>
        <button>Upload</button>
    </form>
</body>
</html>