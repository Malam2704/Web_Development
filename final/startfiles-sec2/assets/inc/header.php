<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>South Harmon Institute of Technology - Scholarship Calculator</title>
  <style>
      body{
          font-family:sans-serif;
      }
      .logo{
          max-width:100%;
      }
      .menu-bar{
          background-color:cornflowerblue;
          padding:5px;
      }
      .menu-item{
          background-color:#fff;
      }
    /* +++++++++++++++++++++++++++++++++ */
      .header{
          grid-area: header;
      }
      .scholarship-calculator{
          grid-area: scholarship-calculator;
          width: 400px;
      }
      .inquiry-form{
          grid-area: inquiry-form;
          width: 400px;
      }
      .footer{
          grid-area: footer;
      }
      /* ++++++++++++++++++++++++++++++++++++ */
      @media only screen and (max-width:800px){
        .wrapper {
            display: grid;
            grid-template-columns: 3fr;
            grid-template-areas:
            'header'
            'scholarship-calculator'
            'inquiry-form'
            'footer';
        }
      }
      @media only screen and (min-width:801px){
        .wrapper {
            display: grid;
            grid-template-columns: 3fr 3fr;
            grid-gap: 1em;
            grid-template-areas:
            'header header'
            'scholarship-calculator inquiry-form'
            'footer footer';
        }
      }
    
  </style>
  <script>
    //For the practical it is OK to put your javascript here! though if you wish you can also do an external file
      function changeYellow(){
          document.getElementById('menu-item').style.background = 'yellow';
      }
      function changeWhite(){
          document.getElementById('menu-item').style.background = 'white';
      }

      function validate(){
        var x = document.forms["myForm"]["num"].value;

        var myNum = parseInt(x);
        if(isNaN(myNum) == false && myNum != ""){
            if(myNum > 70000){
                document.getElementById('scholarshipStatement').innerHTML = "You are not eligible for a scholarship";
            }else{
                document.getElementById('scholarshipStatement').innerHTML = "You are eligible for a 50% scholarship";
            }
        }else{
            alert("Use a number");
        }
        return false;
      }

      function inquiryCheck(){
        var name = document.forms["IQform"]["name"].value;
        var email = document.forms["IQform"]["email"].value;

        if(email.includes("@") && email.includes(".") && email != "" && name != ""){
            return true;
        }else{
            alert("Must be a valid fields bro");
            window.reload();
            return false;
        }
      }
  </script>
</head>

<body>
    <div id="wrapper" class="wrapper">