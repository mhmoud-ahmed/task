<?php
$formProduct = '';
if ($_POST) {
    /* $formProduct = "<div class='offset-5 col-6'><table>
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </thead>
                        <tbody>";
    for ($i = 0; $i < $_POST['varieties']; $i++) {
        $formProduct .= "<tr>";
        $formProduct .= "<td><input name='product' type=\"text\" class=\"form-control\" aria-describedby=\"emailHelp\"</td>";
        $formProduct .= "<td><input name='price' type=\"number\" class=\"form-control\" aria-describedby=\"emailHelp\"></td>";
        $formProduct .= "<td><input name='quantity' type=\"number\" class=\"form-control\" aria-describedby=\"emailHelp\"></td>";
        $formProduct .= "</tr>";
    }
    $formProduct .= "</tbody>
                    </table></div>"; */
    $formProduct =  "<div class='offset-5 col-5 mt-4'>
                        <div class='form-row'>
                            <div class='col'>
                                <label for='user'>Prouduct Name</label>
                            </div>
                            <div class='col'>
                                <label for='user'>Price</label>
                            </div>
                            <div class='col'>
                                <label for='user'>Quantity</label>
                            </div>
                        </div>
                            <form  method='post'>";
    for ($i = 0; $i < $_POST['varieties']; $i++) {
        $formProduct .= "<div class='form-row'>
                            <div class='col mt-2'>
                                <input type='text' name='product' class='form-control'>
                            </div>
                            <div class='col mt-2'>
                                <input type='number'  name='price' class='form-control' >
                            </div>
                            <div class='col mt-2'>
                                <input type='number' name='quantity' class='form-control'>
                            </div>
                        </div>";
    }
    $formProduct .= " <div class='form-group mt-3'>
                        <button class='btn btn-dark rounded form-control'> Recet</button>
                    </div>
                        </form></div>";
    if (isset($_POST['product'])) {
        echo $_POST['product'];
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianter">
        <div class="row  mt-5">
            <div class="col-12 text-center">
                <h1 class="text-dark h1">SuperMarket</h1>
            </div>
            <div class="offset-5 col-5 mt-4">
                <form method="post">
                    <div class="form-group">
                        <label for="user">User Name</label>
                        <input type="text" name="name" value="<?php if (isset($_POST['name'])) {
                                                                    echo $_POST['name'];
                                                                } ?>" class="form-control" aria-describedby="helpId">
                    </div>
                    <div class="form-group ">
                        <label for="user">City</label>
                        <select name="city" class="form-control">
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'giza') {
                                        echo 'selected';
                                    } ?> value="giza">Giza</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'cairo') {
                                        echo 'selected';
                                    } ?> value="cairo">Cairo</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city'] == 'others') {
                                        echo 'selected';
                                    } ?> value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Number">Number OF Varieties</label>
                        <input type="number" name="varieties" value="<?php if (isset($_POST['varieties'])) {
                                                                            echo $_POST['varieties'];
                                                                        } ?>" class="form-control" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded form-control"> Enter Products</button>
                    </div>
                </form>
            </div>
            <?php echo $formProduct; ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>