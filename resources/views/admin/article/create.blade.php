<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>CREATE PRODUCT</h1>
    <form action="/admin/article" method="post">
        {{csrf_field()}}
        <div class="form-group productName">
            <lable>Product Name</lable>
            <input placeholder="Tên của bạn" type="text" name="name">
        </div>
        <div class="form-group category">
            <lable>Category</lable>
            <select  name="author" id="">
                <option value="category 1">Bánh mỳ</option>
                <option value="category 2">Coffee</option>
                <option value="category 3">Phở bò</option>
                <option value="category 4">Bò húc</option>
                <option value="category 5">Mỳ tôm</option>
                <option value="category 5">Bún đậu</option>
                <option value="category 5">Trà sữa</option>
            </select>
        </div>
        <div class="form-group price">
            Price <input placeholder="Giá tiền" type="text" name="content">
        </div>
        <div class="form-group thumbnail">
            Image <input placeholder="Ảnh của bạn" type="text" name="images">
        </div>
        <div class="item1">
            <input  type="submit" value="Save" style="background-color: red">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>