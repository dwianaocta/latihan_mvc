<html>
    <head>
        <title>Sanbercode</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <form action="/welcome" method="POST">
            @csrf
            <div>
                
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname"><br>
            
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname"><br>
            </div>

            <div>
                <p>Gender:</p>
                    <input type="radio" name="gender">Male<br>
                    <input type="radio" name="gender">Female<br>
                    <input type="radio" name="gender">Other<br>
            </div>
        
            <div>
                <p>Nationality:</p>
                    <select>
                        <option>Indonesia</option>
                        <option>English</option>
                        <option>Other</option>
                    </select>
            </div>
        
            <div>
                <p>Language Spoken:</p>
                    <input type="checkbox">Bahasa Indonesia<br>
                    <input type="checkbox">English<br>
                    <input type="checkbox">Other<br>
            </div>

            <div>
                <p>Bio:</p>
                    <textarea cols="35" rows="10"></textarea>
            </div>

            <p>
                <input type="submit" value="Sign Up">
            </p>

        </form>
    </body>
</html> 