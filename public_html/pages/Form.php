<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="../css/Form.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>


<div class="container">
    <form name="question_form" method="get" id="formElem">
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="name">Name</label>
            </div>
            <div class="block_input">
                <input type="text" id="name" name="name"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="email">Email</label>
            </div>
            <div class="block_input">
                <input type="email" id="email" name="email"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label  class="color_blue" for="password">Password</label>
            </div>
            <div class="block_input">
                <input type="password" id="password" name="password"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue"  id="gender_name">Gender</label>
            </div>
            <div class="block_input">
                <input type="radio" id="gender_name" value="man" checked name="gender"/>Male
                <input type="radio" id="gender_name" value="man" checked name="gender"/>Female
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="birth">Birth Date</label>
            </div>
            <div class="block_input">
                <input type="date" id="birth" name="birth"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="contacts">Contacts</label>
            </div>
            <div class="block_input">
                <select id="socials" name="socials">
                    <option value="insta">Instagram</option>
                    <option value="twitter">Twitter</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="telegram">Telegram</option>
                </select>
                <input type="text" id="contacts" name="contacts"/>
                <button class="button_without_border" type="reset">Delete</button>
                <br>
                <p>
                    <select id="ssocials" name="ssocials">
                        <option value="Other">Other</option>
                        <option value="boys">boys</option>
                        <option value="mamzel">mamzel</option>
                        <option value="ded">ded</option>
                    </select>
                    <input type="text" id="contacts" name="contacts"/>
                    <input type="text" id="contacts" name="contacts"/>
                    <button class="button_without_border" type="reset">Delete</button>
                    <br>
                    <button class="blue_button" type="submit">Save</button>
                    <button class="yellow_button" type="submit">Add new</button>
                </p>


            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="photo">Photo</label>
            </div>
            <div class="block_input border_type">
                <input type="file" id="photo" name="photo"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="hobby">Hobbies</label>
            </div>
            <select name="select" size="3" multiple>
                <option value="s1">Movies</option>
                <option value="s2">Music</option>
                <option value="s3">Photography</option>
                n>
                <option value="s4">Basketball</option>
            </select>


        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="words">Some words</label>
            </div>
            <div class="block_input">
                <textarea id="words" name="words"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label></label>
            </div>
            <div class="block_input">
                <input type="checkbox" name="agreement"/>Agreement
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label></label>
            </div>
            <div class="block_input">
                <input class="blue_button" name="print" type="button" value="Update profile"/>
                <button   class="yellow_button" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>