<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1>Address Book</h1>

                {% for person in contacts %}
                    <ul>
                        <li>{{ person.getName }}</li>
                        <li>{{ person.getPhone }}</li>
                        <li>{{ person.getAddress }}</li>
                    </ul>
                {% endfor %}

                <div class=form>
                    <form action="new_contact" method="post">
                        <label for="new_name">Enter Contacts Name:</label>
                        <input id="new_name" name="new_name" type="text">
                        <label for="new_phone">Enter Contacts Phone:</label>
                        <input id="new_phone" name="new_phone" type="text">
                        <label for="new_address">Enter Contacts Address:</label>
                        <input id="new_address" name="new_address" type="text">

                        <button type="sumbit" class="button">Add your Contact</button>
                    </form>
                </div>
                <div>
                    <form action="delete_contact" method="post">
                        <button type="submit">Delete All Contacts</button>
                    </form>
                </div>
        </div>
    </body>
</html>
