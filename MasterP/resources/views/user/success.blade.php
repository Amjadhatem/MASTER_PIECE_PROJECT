<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right,rgba(27, 31, 52, 0.8), rgba(27, 31, 52, 0.8)), url({{ asset('assets/img/success.jpg') }});
            background-size:cover;
            background-position: center;
        }

        .success-container {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background-color:rgba(27, 31, 52, 0.8);
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid rgb(187, 187, 187);
            font-size: 25px;
            opacity: .8;
        }

        .success-container:hover{
            border: 2px solid white;
            transition: all .5s;
            
        }
        
        #hhh:hover{
          transform: translateX(8px);
          transition: all.4s ease;
          /* padding-left: 1rem; */
          padding-right: 1.4rem;
          width: 8rem;
          transition: all .5s;
          cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <a href="{{ route('homepage') }}" id="hhh"><img src="{{ asset('assets/img/logo.png') }}" style="width: 6rem"  alt="logo"></a> 

    </header>
    <div id="succ">

    <div class="success-container">
        <h1>Success!</h1>
        <p>Your action was successful.</p>
    </div>

    </div>
</body>
</html>
