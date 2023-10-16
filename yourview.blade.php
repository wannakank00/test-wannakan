<!-- resources/views/yourview.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 375px;
            /* Mobile width */
            margin: 0 auto;
        }

        header {
            background-color: #FFA500;
            color: #FFF;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            font-weight: 700;
            margin: 0;
        }

        section {
            padding: 20px;
        }

        p {
            font-size: 15px;
            color: #444;
            margin: 0;
        }

        form {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #FF6347;
            color: #FFF;
            padding: 10px 0;
            text-align: center;
        }

        footer p {
            font-size: 14px;
            font-weight: 700;
            margin: 0;
        }
    </style>
</head>

<body>

    @extends('layouts.app')

    @section('content')
    <div class="container">
        <header>
            <h1>Welcome to My Website</h1>
        </header>
        <section>

            <form>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <input type="email" id="email" name="email" placeholder="Your email..">

                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </section>
        <footer>
            <p>Footer - All rights reserved</p>
        </footer>
    </div>

    <style>
        /*Media Queries เพื่อทำให้หน้าเว็บไซต์เป็น responsive สำหรับ Mobile */
        @media only screen and (max-width: 375px) {
            body {
                margin: 0;
                padding: 0;
            }

            .container {
                width: 100%;
                padding: 0 10px;
            }

            header h1 {
                font-size: 20px;
            }

            form {
                padding: 10px;
            }

            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
            }
        }
    </style>
    @endsection


</body>

</html>