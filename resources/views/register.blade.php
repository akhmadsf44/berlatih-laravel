<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
          </select><br><br>
        <label for="language">Language Spoken:</label><br>
        <input type="checkbox" id="language1" name="language1" value="bahasa_indonesia">
        <label for="language1">Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" name="language2" value="english">
        <label for="language2">English</label><br>
        <input type="checkbox" id="language3" name="language3" value="other">
        <label for="language3">Other</label><br><br>
        <label for="bio">Bio:</label><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br><br>
        <button type="button" onclick="document.location='welcome'">Sign Up</button>
    </body>
</html>
