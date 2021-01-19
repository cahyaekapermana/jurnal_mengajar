<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <!-- Get Username -->
    Welcome <b><?php echo $this->session->userdata('s_username'); ?></b>
    <br>
    Ini dashboard.
</body>

</html>