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
            height: 45px;
            font-weight: 500;
            background-color: rgb(100, 145, 74);
            color: #ffffff;
            border-radius: 30px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        #but:hover {
            -webkit-box-shadow: 0px 0px 3px #000;
            box-shadow: 0px 0px 3px #000;
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
            width: 116%;
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



        .login-containerA {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -webkit-box-shadow: 1px 1px 10px #000;
            box-shadow: 1px 1px 13px #000;
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

        #img_index02 {
            border-radius: 160px;
            position: relative;
            align-self: center;
            height: 100px;
            width: 100px;
            color: #ffffff;
            box-shadow: 0px 0px 30px 5px #a1a1a1;
        }

        .bn632-hover {
            width: 140px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            margin: 10px;
            height: 46px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 30px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:focus {
            outline: none;
        }

        .bn632-hover.bn28 {
            background-image: linear-gradient(to right,
                    #eb3941,
                    #f15e64,
                    #e14e53,
                    #e2373f);
            box-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
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