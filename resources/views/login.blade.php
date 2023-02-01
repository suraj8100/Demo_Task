<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('css/ani2.css')}}">

</head>
    </head>
    <body>
        <h1 id="title">Welcome To Login</h1>
    <p id="description">
      Thanks for taking the time,Please Login And Go To Dashboard..!
    </p>
    <form id="survey-form" action="/login_to_dash" method="POST">
        @csrf
      <label id="name-label" for="name" ><strong>Username*</strong></label>
      <input type="text" name="user_name" id="user_name" placeholder="Please enter your first and last name"  />
      <label id="name-label" for="name"><strong>Password*</strong></label>
      <input type="password" name="password" id="password" placeholder="Put Your Password"  />
      <label id="dropdown-label" for="dropdown"></label>
      <button type="submit" id="submit" >Login</button>    
    </form>
    
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- validation cdn --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- app js --}}
    
   

    </body>
   
</html>