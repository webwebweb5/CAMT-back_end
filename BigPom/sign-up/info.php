<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>User</title>
    </head>
    <body>
        <div class="header">
            <h2>Enter your information</h2>
        </div>

        <form action="user.php" method="POST">
            <div class="input-group">
                <label for="first_name">
                    <span>*</span>First name:
                </label>
                <input type="text" name="first_name">
            </div>
            <div class="input-group">
                <label for="last_name">
                    <span>*</span>Last name:
                </label>
                <input type="text" name="last_name">
            </div>
            <div class="input-group">
                <label for="email">
                    <span>*</span>E-mail:
                </label>
                <input type="email" name="email">
            </div>
            <p class="red">*Product detail will send to this E-mail.</p>
            <span>*</span>
            <select class="input-group" name="product"> 
                <option disabled selected>Choose a product</option> 
                <option value="DFR V">DFR V</option> 
                <option value="DFR VI">DFR VI</option> 
                <option value="PANTHER II">PANTHER II</option> 
                <option value="PANTHER III">PANTHER III</option> 
                <option value="FZERO II">FZERO II</option>
                <option value="FZERO III">FZERO III</option>
            </select>
            <div class="input-group">
                <button type="submit" name="submit" value="submit" class="btn">Send</button>
            </div>
            <a href="../index.html">homepage</a><p>  </p><a href="ShowUser.php">All user</a>
        </form>

    </body>
</html>

<!-- <select name="product"> 
    <option disabled selected>Choose a product</option> 
    <option value="DFR V">DFR V</option> 
    <option value="DFR VI">DFR VI</option> 
    <option value="PANTHER II">PANTHER II</option> 
    <option value="PANTHER III">PANTHER III</option> 
    <option value="FZERO II">FZERO II</option>
    <option value="FZERO III">FZERO III</option>
</select> 

<a href="../index.html">homepage</a><p>  </p><a href="ShowUser.php">All user</a> -->