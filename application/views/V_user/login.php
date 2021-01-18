<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <form action="" method="POST">
        <div class="form-group">
            <label>Nomer Telepon</label>
            <input type="number" class="form-control" placeholder="Enter Telpon">
            <small class="form-text text-muted">Masukin nomer teleponmu</small>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>