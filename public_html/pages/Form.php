<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="../css/Form.css">

</head>
<body>


<div class="container">
    <form name="question_form" method="get" id="formElem">
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="name">Name</label>
            </div>
            <div class="block_input">
                <input class="inputcolor"  type="text" id="name" name="name"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="email">Email</label>
            </div>
            <div class="block_input">
                <input class="inputcolor"   type="email" id="email" name="email"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label  class="color_blue" for="password">Password</label>
            </div>
            <div class="block_input">
                <input  class="inputcolor"  type="password" id="password" name="password"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue"  id="gender_name">Gender</label>
            </div>
            <div class="block_input">
                <input  class="inputcolor"  type="radio" id="gender_name" value="man" checked name="gender"/>Male
                <input  class="inputcolor"  type="radio" id="gender_name" value="man" checked name="gender"/>Female
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="birth">Birth Date</label>
            </div>
            <div class="block_input">
                <input  class="inputcolor"  type="date" id="birth" name="birth"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="contacts">Contacts</label>
            </div>
            <div class="block_input">
                <select id="socials" class="inputcolor" name="socials">
                    <option  class="inputcolor"  value="insta">Instagram</option>
                    <option  class="inputcolor"  value="twitter">Twitter</option>
                    <option  class="inputcolor"  value="linkedin">LinkedIn</option>
                    <option  class="inputcolor"  value="telegram">Telegram</option>
                </select>
                <input  class="inputcolor"  type="text" id="contacts" name="contacts"/>
                <button class="button_without_border" type="reset">Delete</button>
                <br>
                <p>
                    <select id="ssocials"  class="inputcolor" name="ssocials">
                        <option  class="inputcolor"  value="Other">Other</option>
                        <option  class="inputcolor"  value="boys">boys</option>
                        <option  class="inputcolor"  value="mamzel">mamzel</option>
                        <option  class="inputcolor"  value="ded">ded</option>
                    </select>
                    <input  class="inputcolor"  type="text" id="contacts" name="contacts"/>
                    <input  class="inputcolor"  type="text" id="contacts" name="contacts"/>
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
                <input  class="inputcolor"  type="file" id="photo" name="photo"/>
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label class="color_blue" for="hobby">Hobbies</label>
            </div>
            <select name="select"  class="inputcolor"  size="3" multiple>
                <option  class="inputcolor"  value="s1">Movies</option>
                <option class="inputcolor"   value="s2">Music</option>
                <option  class="inputcolor"  value="s3">Photography</option>
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
                <input  class="inputcolor"  type="checkbox" name="agreement"/>Agreement
            </div>
        </div>
        <div class="row">
            <div class="block_label">
                <label></label>
            </div>
            <div class="block_input">
                <input  class="inputcolor"  class="blue_button" name="print" type="button" value="Update profile"/>
                <button   class="yellow_button" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>