<!Doctype Html>  
<Html>     
    <Head>      
        <Title>     
        Custom Order Cydfleur   
        </Title>
        <style>  
            body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-left: 300px;
            margin-right: 300px;
            border-style: outset;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.8);
            padding: 25px;
            border: 1px dashed grey;
            }
        </style>  
    </Head> 

    <Body>
        <div style="display: flex; justify-content: center; align-items:center; height: 20vh;">
            <center><img src="images/logo.png" height="110" width="300" alt="logo image"></center>
        </div>
        <h2 align="center">MAKE YOUR OWN BOUQUET!</h2>  
        
            <img src="images/flower1.PNG" height="200" width="700" alt="choose image">
            <br>
            <img src="images/flower2.PNG" height="200" width="700" alt="choose image">
            <br>
            <img src="images/flower3.PNG" height="200" width="700" alt="choose image">
            <br>
            <img src="images/wrap.PNG" height="200" width="700" alt="choose image">
        
        <br>
        
        <form action="" method="POST" name="input">
            <label>     
                Size :    
            </label>
                <br>    
                <input type="radio" name="size" value="Small"/> Small   
                <input type="radio" name="size" value="Medium"/> Medium    
                <input type="radio" name="size" value="Large"/> Large    
                <br>    
                <br>

            <table style="width:100%">
                <tr>
                    <td>Flowers :</td>
                    <td>Fillers :</td>
                </tr>
                <tr>
                    <td>Up to 3 choices</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox1" value="Pink Rose"> Pink Rose</td>
                    <td><input type="checkbox" name="checkbox11" value="Caspea"> Caspea</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" value="Peach Rose"> Peach Rose</td>
                    <td><input type="checkbox" name="checkbox12" value="White Carnation Spray"> White Carnation Spray</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox3" value="White Rose"> White Rose</td>
                    <td>Leaves :</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox4" value="Soft PinkGomple"> Soft Pink Gomple</td>
                    <td><input type="checkbox" name="checkbox21" value="Silver Dollar"> Silver Dollar</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox5" value="White Pompom"> White Pompom</td>
                    <td><input type="checkbox" name="checkbox22" value="Ruskus"> Ruskus</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox6" value="Yellow Pompom"> Yellow Pompom</td>
                    <td><input type="checkbox" name="checkbox23" value="Populus"> Populus</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox7" value="Sunflower"> Sunflower</td>
                    <td><input type="checkbox" name="checkbox24" value="Parvifolia"> Parvifolia</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox8" value="Purple Carnation"> Purple Carnation</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox9" value="Pink Carnation"> Pink Carnation</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox10" value="White Lisianthius"> White Lisianthius</td>
                </tr>
            </table>
            <br>

            <label>     
                Paper :    
            </label>
                <br>    
                <input type="radio" name="Paper" value="Brown"/> Brown   
                <input type="radio" name="Paper" value="Dark Pink"/> Dark Pink    
                <input type="radio" name="Paper" value="Black"/> Black
                <input type="radio" name="Paper" value="Transparent"/> Transparent
                <input type="radio" name="Paper" value="Creme"/> Creme
                <br>    
                <br>
              
            <label>Name</label> <br>           
                <input type="text" name="firstname" size="15"/>  
            <label></label>           
                <input type="text" name="lastname" size="15"/> <br><br>
                
            <label>Email :</label> <br>     
                <input type="email" id="email" name="email"> <br>      
            <br> <br>

            <label>Phone :</label> <br>   
                <input type="text" name="phone"> <br> <br>

            <label>Delivery Date :</label> <br> 
                <input type = "date" name="date"> <br> <br>

            <p align="justify"><b>CUSTOM ORDER TERMS AND CONDITIONS</b> <br>
            1. After submitting the custom form, Cydfleur will contact you via Whatsapp or Email to <br>confirm the order. <br>
            2. Invoice will be sent via Whatsapp or email after custom order is confirmed. <br>
            3. Item availability is subject to change at any time. <br>
            4. Our team will adjust the number of stems to the size you choose and cannot be changed. <br>
            5. Please contact us via Whatsapp or email for further inquiries. <br><br>
            </p>

            <i>Thank You!</i> <br>
            <input type="checkbox" name="setuju" value="I agree to the terms and conditions above"> I agree to the terms and conditions above. <br><br>

            Never submit sensitive information such as passwords.
            <input type="submit" name="input" value="SEND">

        </form>    
    </Body>   
</Html>

<?php
    if (isset($_POST['input'])) {
        echo "<h2>confirm your customized bouquet:</h2>";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        echo "Order in the name of ♡ $firstname $lastname ♡" . "<br>";
        $phone = $_POST['phone'];
        echo "Phone : $phone" . "<br>";
        $email = $_POST['email'];
        echo "Email : $email" . "<br>";
        echo "<br>";
        $date = $_POST['date'];
        echo "Delivery Date : $date" . "<br>";
        echo "<h3>Customized bouquet:</h3>";
        $size = $_POST['size']; 
        echo "Size <b>$size</b>" . "<br>";
        echo "<br>";
        if (isset($_POST['checkbox1'])) { 
            echo "❀ Flower ❀ :" . "<br>";
            echo "+ " . $_POST['checkbox1'] . "<br>";  
           } 
           if (isset($_POST['checkbox2'])) { 
            echo "+ " . $_POST['checkbox2'] . "<br>";  
           } 
           if (isset($_POST['checkbox3'])) { 
            echo "+ " . $_POST['checkbox3'] . "<br>";  
           } 
           if (isset($_POST['checkbox4'])) { 
            echo "+ " . $_POST['checkbox4'] . "<br>";  
           } 
           if (isset($_POST['checkbox5'])) { 
            echo "+ " . $_POST['checkbox5'] . "<br>";  
           } 
           if (isset($_POST['checkbox6'])) { 
            echo "+ " . $_POST['checkbox6'] . "<br>";  
           } 
           if (isset($_POST['checkbox7'])) { 
            echo "+ " . $_POST['checkbox7'] . "<br>";  
           } 
           if (isset($_POST['checkbox8'])) { 
            echo "+ " . $_POST['checkbox8'] . "<br>";  
           } 
           if (isset($_POST['checkbox9'])) { 
            echo "+ " . $_POST['checkbox9'] . "<br>";  
           }
           if (isset($_POST['checkbox10'])) { 
            echo "+ " . $_POST['checkbox10'] . "<br>";  
           } 
        echo "<br>";
        echo "୨୧ Filler ୨୧ :" . "<br>";
        if (isset($_POST['checkbox11'])) { 
            echo "+ " . $_POST['checkbox11'] . "<br>";  
           } 
           if (isset($_POST['checkbox12'])) { 
            echo "+ " . $_POST['checkbox12'] . "<br>";  
           }
        echo "<br>";
        echo "☘︎ Leave ☘︎ :" . "<br>";
        if (isset($_POST['checkbox21'])) { 
            echo "+ " . $_POST['checkbox21'] . "<br>";  
           } 
           if (isset($_POST['checkbox22'])) { 
            echo "+ " . $_POST['checkbox22'] . "<br>";  
           } 
           if (isset($_POST['checkbox23'])) { 
            echo "+ " . $_POST['checkbox23'] . "<br>";  
           } 
           if (isset($_POST['checkbox24'])) { 
            echo "+ " . $_POST['checkbox24'] . "<br>";  
           }
        echo "<br>";
        $Paper = $_POST['Paper']; 
        echo "Paper : <b>$Paper</b>" . "<br>";
        echo "<br>";
        
        if (isset($_POST['setuju'])) {
            $setuju = $_POST['setuju']; 
            echo "<b>I agree to the terms and conditions above<b>"."<br>";
           }
        echo "<br>";
        echo "Cydfleur has the best customers! Thank you sooo much for your support! (❀❛ ֊ ❛„)♡ <br>
        We are so grateful for the pleasure of serving you and hope we met your expectations.";
    }
?>