<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap');


        .modal-header {
            background-color: #153757;
        }

        body {
            background-color: #153757;
        }

        #menu:hover {
            background-color: rgb(100, 145, 74);
        }

        #but {

            background-color: rgb(100, 145, 74);
            color: #ffffff;

        }

        #modal-content {
            width: 150%;
            height: 130%;

            left: -25%;
            top: 100%;
        }

        h1 {
            color: #ffffff;
        }

        h6 {
            position: relative;
            top: -22px;
            left: 27px;
        }

        #img {
            position: relative;
            top: 12px;
            left: -3px;
            height: 35px;
            width: 35px
        }

        #imgAgua {
            position: relative;
            top: 15px;
            left: -5px;
            color: #ffffff;
        }

        #offcanvasNavbar {
            width: 20%;

        }

        .dropdown-menu {

            color: #ffffff !important;
            border: solid;
            border-color: #153757;
        }


        .dropdown-menu .dropdown-item:hover {
            background-color: rgb(100, 145, 74) !important;
            width: 100%;
            color: #ffffff !important;
            border: solid;
            border-color: #153757;
        }

        #table {
            width: 85%;
            height: 50%;
            left: 5%;
            position: relative;
        }

        .input-group {
            margin: 0px auto;
        }

        #card_index {
            width: 550px;
            height: 450px;
            background: white;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -webkit-box-shadow: 1px 1px 12px #000;
            box-shadow: 1px 1px 20px #000;
        }

        .h4 {
            position: relative;
            color: black;
            font-family: 'Montserrat', sans-serif;

        }

        #label {
            position: relative;
            font-size: large;
        }

        #img_index {
            border-radius: 160px;
            position: relative;
            align-self: center;
            height: 105px;
            width: 105px;
            color: #ffffff;
            box-shadow: 0px 0px 30px 0px #a1a1a1;
            margin-top: 5%;
        }

        .container {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: auto;
            left: -320px;
            transition: all ease-in-out 300ms;
        }

        .sidebar {
            width: 320px;
            height: 100%;
            background: black;
            overflow: auto;
            float: left;
        }

        .sidebar img {
            width: 130px;
            display: block;
            margin: 10px auto;
            opacity: .7;
        }

        .side-hide {
            float: right;
            margin: 12px;
            color: white;
            opacity: .7;
            font-size: 24px;
            cursor: pointer;
        }

        .sidebar ul li {
            list-style: none;
            padding: 12px 10px;
        }

        .sidebar ul li:hover {
            background: #4e4e4e;
            cursor: pointer;

        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            opacity: .7;
            font-size: 17px;
            font-family: sans-serif;
        }

        .content {
            padding: 20px;
            font-size: 16px;
            color: black;
            font-family: sans-serif;
        }

        .content h2 {
            font-size: 30px;
            text-transform: uppercase;
            margin-left: 310px;
            margin-bottom: 10px;

        }

        .content p {
            font-size: 18px;
            text-align: justify;
            margin-left: 310px
        }

        #button {
            background: black;
            color: white;
            padding: 10px 20px;
            border: none;
            display: block;
            /* margin: 10px auto; */
            float: left;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 10px
        }

        .show {
            left: 0;
        }

        #login {
            width: 90%;
            align-self: center;

        }
    </style>
</body>

</html>