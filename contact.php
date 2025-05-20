<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>


<title>Contact Us</title>
  
<style>
    body {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vb;
        margin: 0;
    }
     
    h2{
        display: flex;
        justify-content: center;
        
    }
    form {
        background-color: lightgrey;
        border: 3px dashed grey;
        padding: 20px;
        width: 300px;
        border-radius: 10px;
        align-items: center;
    }
    
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
    }
    
       
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }
    
    textarea {
        height: 100px;
    }
    
    input[type="submit"] {
        width: 30%;
        padding: 10px;
        background-color: blue;
        color: white;
        border-radius: 15px;
        cursor: pointer;
        transition: background-color 0.5s ease;
        font-size: 20;
    
    }
    .submitbutton {
        display: flex;
        justify-content: center;
    }
    input[type="submit"]:hover{
        background-color: green;
    }
    
    </style>
      
<d
<body>
    <h2>Contact US</h2><br>
    <form action="home.php" method="post">
        
        <label for="name"> Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email"> Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message"> Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="button">Submit </button>
      
    </form>

</body>
</html>



