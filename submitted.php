<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppanese Asian Mart</title>
    <link rel="stylesheet" href="style/common.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/submitted.css">
</head>
<body>
    <div class="bodd">
        <div class="what">
            <h2>Thank you for your feedback, <?php echo $_GET["name"]; ?></h2><br>
            <h3>Your feedback:</h3>
            <div class="welp">
                 <h2 class="hh"><?php echo $_GET["feedback"]; ?></h2>
            </div>

            <h2>Are you sure you would like to send this feedback?</h2>
            <br>
            <button onclick="myFunction(); document.location.href='index.html'">Submit</button>

            <script>
                function myFunction() {
                alert("Your feedback has been submitted");
                }

            </script>
            
        </div>
    </div>
    
</body>
</html>