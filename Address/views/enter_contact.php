<!DOCTYPE html>
<html>
    <head>
        <title>New Contact</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1>New Contact</h1>
                <h3>This is your new contact</h3>
                    <ul>
                        <li>{{ newPerson.getName }}</li>
                        <li>{{ newPerson.getPhone }}</li>
                        <li>{{ newPerson.getAddress }}</li>
                    </ul>
                <a href="/">
                    <button type="submit" class="button">Back to Address Book</button>
                </a>
        </div>
    </body>
</html>
