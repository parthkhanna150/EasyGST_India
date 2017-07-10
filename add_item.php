<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#myForm1").validate()
        })
    </script>
</head>
<body>
<div class="container">
    <?php
    include "admin_header.php"
    ?>
    <h1>Insert data for new item</h1>
    <form action="insert_data.php" id="myForm1" method="post">
        <div class="form-group">
            Enter item name
            <input type="text" class="form-control" name="textbox1" data-rule-required="true" data-msg-required="This cannot be blank">
        </div>
        <div class="form-group">
            Enter CGST
            <input type="text" class="form-control" name="textbox2">
        </div>
        <div class="form-group">
            Enter SGST
            <input type="text" class="form-control" name="textbox3">
        </div>
        <div class="form-group">
            Enter HSN Code
            <input type="text" class="form-control" name="textbox4">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>

</body>
</html>