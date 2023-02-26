<?php
/* 
Assignment Title: HTML, Basic OOP, and Superglobal Variables in PHP

Task 1: HTML Basics

Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form.
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div, button{
            margin: 10px;
        }
    </style>
</head>
<body>
    
    <form action="assignment5.php" method="POST">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="">Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    <br>
    <hr>
</body>
</html>

<?php

/*
Task 2: Basic OOP in PHP

Create a PHP class called "Person" with the following properties and methods:

Properties:

Name
Email

Methods:

setName($name): sets the name property
setEmail($email): sets the email property
getName(): returns the name property
getEmail(): returns the email property

Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.
*/

class Person{
    public $name;
    public $email;

    public function setName($name){
        $this->name  = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}

// person object
$person = new Person();
$person->setName("mahedi");
$person->setEmail("mahedi@gmail.com");

echo "Output of Task-2: <br>";
echo $person->getName()."<br>";
echo $person->getEmail()."<br>";


/*
Task 3: Superglobal Variables in PHP

Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.
*/

echo "<br>";
echo "<br>";
echo "<br>";
echo "Output of Task-3:";
echo "<br>";
$name = "";
$email = "";
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $newPerson = new Person();
    $newPerson->setName($name);
    $newPerson->setEmail($email);

    echo "Name: ". $newPerson->getName();
    echo "<br>";
    echo "Email: ". $newPerson->getEmail();
}

