git <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>

<body>
    <h2>My Form</h2>
    <p>Please fill in this form</p>
    <form action="Information.php" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail">
        </p>
        <p>
            <label for="Gender">Gender:<sup>*</sup></label>            
            <input name="gender" id="Gender">
        </p>
        <p>
            <label for="interest">Interest:</label>
            <select name="interest" id="interest">
                <option placeholder="Select one"></option>
                <option value="food">Food</option>
                <option value="money">Money</option>
                <option value="family">Family</option>
            </select>
        </p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>