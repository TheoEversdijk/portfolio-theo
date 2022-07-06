<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple API with Proxy Test</title>

</head>

<body>
<form action="controller.php" method="post">
<input id="number" name="phone">
<button onclick="displayData()">PRESS</button>
</form>
<p id="valid"></p>
</body>

<script>
    function displayData(){
        const isValid = document.getElementById('valid');

        fetch("../controller.php").then(function (response) {
            // The API call was successful!
            return response.text();
        }).then(function (data) {

            isValid.innerHTML = data;

        }).catch(function (err) {
            // There was an error
            console.warn('Something went wrong.', err);
        });
    }
</script>

</html>
