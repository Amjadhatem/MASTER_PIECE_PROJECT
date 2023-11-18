<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png">

  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: linear-gradient(to right,#0e1225 ,rgba(8, 9, 14, 0)) ,url('{{ asset('assets/img/successCon.jpg') }}');
        background-position: center;
        background-size: cover;
          }

        h1 {
          color: #ffffff;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #ffffff;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: green;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: none;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        border: 1px solid rgb(99, 99, 99);
        display: inline-block;
        margin: 0 auto;
        opacity: .9;
      }
    </style>
    <body>

        <header>
            <a href="{{ route('homepage') }}" id="a_back"><img src="{{ asset('assets/img/logo.png') }}" style="width: 4.9rem "  alt="logo"></a>        
         </header>
        <br>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
      </div>
    </body>
</html>