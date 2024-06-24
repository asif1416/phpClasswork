<?php 
    include("../control/process.php");
?>
<!DOCTYPE html>
<html>
<head>

    <title>User Category Registration</title>

</head>

<body>
    <h2>Buyer Registration Form</h2>

    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <legend> Buyer Information</legend>
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="firstName">First Name:</label></td>
                    <td><input type="text" id="firstName" name="firstName"></td>
                </tr>
                <tr>
                    <td><label for="lastName">Last Name:</label></td>
                    <td><input type="text" id="lastName" name="lastName"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>

            
                <tr>
                    <td><label for="age">Age:</label></td>
                    <td><input type="number" id="age" name="age"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="number" id="phone" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for = "address">Shipping Address : </label></td>
                    <td>
                        <input type = "text" id="addres" name="address">
                    </td>
                </tr>
                
            </table>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>

    </form>

</body>

</html>
