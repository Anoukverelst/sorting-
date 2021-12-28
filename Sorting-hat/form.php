<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
    <!-- Main -->
    <main>

        

        <form action="./controllers/person.php" method="POST" class="signup">
        <h1> 
            Create new account
        </h1>
            <!-- Name -->
            <div class="input">
                <label for="firstname">Firstname</label>
                <input class="input-field" type="text" id="firstname" name="firstname" placeholder="fill in your firstname" required />
            </div>

            <div class="input">
                <label for="lastname">Lastname</label>
                <input class="input-field" type="text" id="lastname" name="lastname" placeholder="fill in your lastname" required />
            </div>

            <div class="input">
                <label for="age">Age</label>
                <input class="input-field" type="text" id="age" name="age" placeholder="fill in your age" required />
            </div>

            <div class="input">
                <label for="description">Describe yourself:</label>
                <textarea style="resize:none" class="input-field" id="description" name="description" placeholder="Describe yourself here!" required /></textarea>
            </div>

            <div class="input">
                <label for="power">If you could have any power, which would you choose?</label>
                <textarea style="resize:none" class="input-field" id="power" name="power" placeholder="Fill in your power of choice." required /></textarea>
            </div>
            <!-- Submit -->
            <input class="submit" type="submit" name="submit" value="create account" />
        </form>
    </main>
</body>
</html>