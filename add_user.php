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
    include "public_header.php"
    ?>
    <form action="insert_user.php" id="myForm1" method="post">
        <div class="form-group">
            Enter Email Address
            <input type="text" class="form-control" name="textbox1" data-rule-required="true" data-msg-required="Image cannot be blank" data-rule-email="true">
        </div>
        <div class="form-group">
            Enter Password
            <input type="password" class="form-control" name="textbox2" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Confirm Password
            <input type="password" class="form-control" name="textbox3" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Enter Mobile Number
            <input type="text" class="form-control" name="textbox4" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter Address
            <input type="text" class="form-control" name="textbox5" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter Gender
            <select class="form-control" name="textbox6">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
                <option>Prefer not to specify</option>
            </select>
        </div>
        <div class="form-group">
            Enter Entity Name
            <input type="text" class="form-control" name="textbox7" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter GST Number
            <input type="text" class="form-control" name="textbox8" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>

</body>
</html>