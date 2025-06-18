<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $name = "faza"; ?>
    @php $umur = 17; @endphp

    nama saya &nbsp;
    <?php echo $name;  ?> <br>
    umur saya <strong>{{$umur}}</strong>
</body>
</html>