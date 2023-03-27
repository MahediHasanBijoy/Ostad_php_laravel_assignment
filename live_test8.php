<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>25</td>
            </tr>
            <tr>
                <td>Sarah</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Mike</td>
                <td>28</td>
            </tr>
            <tr>
                <td><?php echo $_POST['name'] ?? "" ;?></td>
                <td><?php echo $_POST['age'] ?? "" ;?></td>
            </tr>
        </tbody>
    </table>

    <form action="#" method="post">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter your name">
        <label for="">Age</label>
        <input type="number" name="age" placeholder="Enter your age">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>