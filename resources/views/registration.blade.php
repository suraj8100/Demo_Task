<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{asset('css/ani2.css')}}">

</head>
    </head>
    <body>
        <h1 id="title">Register With Your Information</h1>
    <p id="description">
      Hey programmers, thanks for taking the time, You can just Register here and login form your Email.
    </p>
    <form id="survey-form" action="/submit_information" method="POST">
        @csrf
      <label id="name-label" for="name" ><strong>Username*</strong></label>
      <input type="text" name="username" id="username" placeholder="Please enter your first and last name"  />
      <label id="name-label" for="name"><strong>Password*</strong></label>
      <input type="password" name="password" id="password" placeholder="Put Your Password"  />
      <label id="email-label" for="email"><strong>Email*</strong></label>
      <input type="email" name="email" id="email"  placeholder="Please enter your email address"   />
      <label id="number-label" for="number"><strong>Mobile No*</strong></label>
      <input type="text" name="mob_no" id="mob_no"  placeholder="Please enter your Mob No (+91)" />
    
      <label id="dropdown-label" for="dropdown"><strong>Country*</strong></label>
      <select name="country" id="country" onchange="coun()">
        <option disabled selected value>Select your country here</option>
        @foreach ($data as $item)
        <option value="{{$item->id}}" >{{$item->name}}</option>
        @endforeach
      </select>
    
      <label id="dropdown-label" for="dropdown"><strong>State*</strong></label>
      <select name="state" id="state" value="" onchange="getCity(this.value)">
        <option  value="" >Select your state here</option>
      </select>
      <label id="dropdown-label" for="dropdown"><strong>City*</strong></label>
      <select name="city" id="city" >
        <option disabled selected value>Select your City here</option>
        
      </select>
      
      <label id="dropdown-label" for="dropdown"></label>
      <button type="submit" id="submit" >Submit the form</button>
    
    
    </form>
    
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- validation cdn --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- app js --}}
    
    <script src="{{asset('/js/validation_script.js')}}"></script>
    <script src="{{asset('axios/dist/axios.min.js')}}"></script>
    <script src="{{asset('/js/axios_script.js')}}"></script>

    </body>
   
</html>