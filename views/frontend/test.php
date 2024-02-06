<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon site</title>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <style>
            body {
                text-align: center;
            }
            ul {
                margin: 0px;
                padding: 0px;
            }
            li {
                display: inline-block;
                margin: 0px;
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Inscription</h1>
        <form id="recaptcha" action="recaptcha.php" method="post">
            <input type="text" name="pseudonyme" placeholder="Pseudo"><br>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe"><br>
            <button class="g-recaptcha" 
            data-sitekey="6LciKGcpAAAAAGSKbBGmchq1AKqzW5a71kzNJfNN" 
            data-callback='onSubmit' 
            data-action='submit' >Submit</button>
        </form>


    <script>
   function onSubmit(token) {
     document.getElementById("recaptcha").submit();
     console.log(document.getElementById("recaptcha"));
   }
</script>

</body>
</html>