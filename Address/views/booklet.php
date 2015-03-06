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
                    <div class="contact">
                        <img src="{{ person.getSexImage }}"/>
                        <div class="info">
                            <ul>
                                <li><span>Name: </span>{{ person.getName }}</li>
                                <li><span>Phone Number: </span>{{ person.getPhone }}</li>
                                <li><span>Address: </span>{{ person.getAddress }}</li>
                            </ul>
                        </div>
                    </div>
                {% endfor %}
                <div id="inputs"
                    <div class=form>
                        <form action="new_contact" method="post">
                            <label for="new_name">Enter Contacts Name:</label>
                            <input id="new_name" name="new_name" type="text" required>
                            <label for="new_phone">Enter Contacts Phone:</label>
                            <input id="new_phone" name="new_phone" type="text" required>
                            <label for="new_address">Enter Contacts Address:</label>
                            <input id="new_address" name="new_address" type="text" required>
                            <label for"gender">Enter Contacts Gender:</label> <br>
                            <input class="gender" name="gender" type="radio" value="/images/male.jpeg" required>Male<br>
                            <input class="gender" name="gender" type="radio" value="/images/female.jpeg" required>Female<br>
                            <input class="gender" name="gender" type="radio" value="/images/possible.jpeg" required>Other

                            <button type="sumbit" class="button">Add your Contact</button>
                        </form>
                    </div>
                    <div>
                        <form action="delete_contact" method="post">
                            <button type="submit">Delete All Contacts</button>
                        </form>
                    </div>
                </div>
        </div>
    </body>
</html>
