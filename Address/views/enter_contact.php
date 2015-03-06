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
                <div class="contact">
                    <img src="{{ newPerson.getSexImage }}"/>
                    <div class="info">
                        <ul>
                            <li><span>Name: </span>{{ newPerson.getName }}</li>
                            <li><span>Phone Number: </span>{{ newPerson.getPhone }}</li>
                            <li><span>Address: </span>{{ newPerson.getAddress }}</li>
                        </ul>
                    </div>

                <a href="/">
                    <button type="submit" class="button">Back to Address Book</button>
                </a>
        </div>
    </body>
</html>
