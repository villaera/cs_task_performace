<?php
    /* In here, we already get all the data submitted from the form in registration.php
    Because we already get the data from the form using POST method,we can already
    used the $_POST variable to collect the value of the input field and
    each input field's name attribute corresponds to a key in the $_POST array.
        Example: <input type="text" name="FirstName"/> 
                    corresponds to $_POST['FirstName']
    
    I will use the name attributes to access the submitted data 
    to allow me to capture user input from the form fields.
        Example: $FirstName = $_POST['FirstName'];

    By assigning the form data to variables, I can easily reference and manipulate 
    the user input later in the script.
    */

        $FirstName = $_POST['FirstName'];
        $Age = $_POST['Age'];
        $gender = $_POST['gender'];
        $Quote = $_POST['Quote'];

   /* To display the submitted data I will use echo statement and 
    the concatenation operator that I will use is the dot (.) operator.
    To format the output properly, I will also include line breaks using <br> tags.
    Lastly, I will output the data received from the form in a 
    sentence format as specified. 
    In a sentence format of: "You are <firstname>, a <age>-year old <gender>. 
    Your motto in life is: <motto>" 
    */

        echo "My name is " . $FirstName . ", a " . $Age . "-year-old " . $gender . 
        ". <br> My motto in life is: " . $Quote;  "<br/>";

    /*
    Example Output:
   "My name is Jocel, a 25-year-old Female.
   My motto in life is: The 7Bs were stands for: Books Before 
   Boys Because Boys Brings Babys."    
    */ 

?>
