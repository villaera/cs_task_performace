<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- (Form Data) We will create an HTML form that collects user input for 
        FirstName, Age, Gender, and Quote. The form will use the POST method to 
        submit the data to form.php for processing. -->
     
     <!--  First of I will use HTML form that I create to call the form.php file 
        using POST method then use label and input tags to create the form fields
        and each input field will have a name attribute, and that attribute is
        the one we will used to identify the form data after submission.
        Example: <input type="text" name="FirstName"/>
        
        The name attribute 'FirstName' will corresponds to the $_POST['FirstName'] 
        in form.php-->
    <form method="POST" action="form.php">
        <!-- (FirstName) We will create input fields for "FirstName". I will use 
         label and input tags to create the form fields and inside the input field 
         will have a name attribute "FirstName". -->
        <label> FirstName: </label>
            <input type="text" name="FirstName"/> <br>

        <!-- (Age) We will also create a number input field for "Age".
         I will use label and input tags to create the form field of "Age" and inside
         the input field will have a name attribute of "Age". -->
        <label> Age: </label>
            <input type="Age" name="Age" /> <br>
        
        <!-- (Gender) In gender we will create a select field for "Gender" 
         with the options Female, Male, Other. I will still use the label and
         input tags to create the select feilds and inside the select field 
         will have a name attribute "gender". -->
         <label> Gender: </label>
         <select name="gender" >
            <option>Female</option>
            <option>Male</option>
        </select> <br>
        
        <!-- (Quests) In here, I'll still create a text input field for "Qouets". 
        I will still use label and input tags to create the form field of "Quote"
        and inside the input field will have a name attribute of "Quote". -->
         <label> Quote: </label>
           <input type="Quote" name="Quote" /><br>
        <!-- (Button) Finally, we will add a submit button to send the form data to form.php   
        and a reset button to clear the form fields.  -->
            <input type="submit" value="Submit" />
            <input type="reset" value="Clear" />
    </form>

</body>



