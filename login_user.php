<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#myLogIn").validate()
        })
    </script>
</head>
<body>
<div class="container">
    <?php
    include "public_header.php"

    ?>
    <h1>Member Login</h1>
    <form action="verify_user.php" id="myLogIn" method="post">
        <div class="form-group">
            Enter email address
            <input type="text" class="form-control" name="textbox1" data-rule-required="true" data-msg-required="This cannot be blank" data-rule-email="true">
        </div>
        <div class="form-group">
            Password
            <input type="password" class="form-control" name="textbox2" data-rule-required="true" data-msg-required="This cannot be blank">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>

</body>
</html>