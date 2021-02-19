<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="theme.css">
</head>
<body>
<table>
    <tr>
        <th> last week  </th>
        <th> yesterday</th>
        <th> today</th>
        <th>Tomorrow</th>
        <th> next week </th>
    </tr>
    <tr>
        <td id="q"></td>
        <td id="q1"></td>
        <td id="q2"></td>
        <td id="q3"></td>
        <td id="q4"></td>
    </tr>

</table>
<button id="update">
Update
</button>

<script>
    $(function () {
        $("#update").click(function () {
            $.post('q.php',function (e) {
                $("#q").text(e)
            });
            $.post('q1.php',function (e) {
                $("#q1").text(e)
            });
            $.post('q2.php',function (e) {
                $("#q2").text(e)
            });
            $.post('q3.php',function (e) {
                $("#q3").text(e)
            });
            $.post('q4.php',function (e) {
                $("#q4").text(e)
            });
        });
    });
</script>
</body>
</html>
