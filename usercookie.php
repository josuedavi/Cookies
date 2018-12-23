<!DOCTYPE HTML>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Cookies</title>
      <link rel="shortcut icon" href="cookie.png" />
      <link rel="stylesheet" href="<!-- enter external stylesheet here -->">

      <style>

      body
      {
color: #42474f;
background-color: #f4f6f7;
      }
      nav
      {
        height: 40px;
        font-size: 20px;
      }

      main
      {

      }

      #ctitle
      {
          margin-top: 50px;
          font-size: 48px;
         text-align: center;
      }
      #cookie
      {
      height: 400px;
      width: 400px;
      }

      #two-column-container
      {
        margin-top: 50px ;
        margin-bottom: 50px;
        display: grid;
        grid-template-columns: 400px 400px;

      }

      #cookie-picture
      {
margin-left: 200px;

      }
      #cookie-text
      {
        margin-left: 300px;
        font-size: 16px;
          width: 400px;
      }
      #cookie-moster
      {
        margin-left:13%;
        margin: right: ;
        width: 992px;
        height: 350px;

      }
      footer
      {
        height: 40px;
        font-size: 20px;
      }
      nav,footer
      {
      background-color: black;
      color: white;
      }

      </style>


     <script "text/javascript">

     function setCookie(cname,cvalue,exdays)
     {
       var d = new Date();
       d.setTime(d.getTime() + (exdays*24*60*60*1000));
       var expires = "expires=" + d.toGMTString();
       document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
     }

     function getCookie(cname)
      {
       var name = cname + "=";
       var decodedCookie = decodeURIComponent(document.cookie);
       var ca = decodedCookie.split(';');

       for(var i = 0; i < ca.length; i++)
       {
         var c = ca[i];
         while (c.charAt(0) == ' ')
          {
           c = c.substring(1);
          }
           if (c.indexOf(name) == 0)
           {
             return c.substring(name.length, c.length);
           }
       }
       return "";
     }

   function checkCookie()
   {
     var user=getCookie("username");
     if (user != "") {
       alert("Welcome again " + user);
     } else {
        user = prompt("Please enter your name:","");
        if (user != "" && user != null) {
          setCookie("username", user, 30);
        }
     }
   }
     </script>

    </head>
    <body onload="checkCookie()">

      <nav>

     </nav>


     <main>

       <h1 id="ctitle">Cookies, But A Different Type....</h1>
       <div id="two-column-container">

         <div id="cookie-picture">
           <img id="cookie" src="bittencookie.png"/>
         </div>

         <div id="cookie-text">
           <p>
             Praesent laoreet lacus at erat venenatis lobortis. Quisque accumsan vehicula felis, imperdiet tempus nisi pretium a.
             In tellus massa, lobortis quis enim in, fringilla imperdiet nisi. Aenean quis porttitor quam. Sed vulputate tortor et
              venenatis sagittis. Praesent sit amet mollis lectus. Integer sed vehicula mi, ac consectetur neque. Donec semper vel
              lacus sed rutrum. Maecenas a tortor sit amet erat sodales aliquam id non eros. Duis blandit, ex a ultricies congue, purus
              dui imperdiet arcu, non gravida urna elit eu ex. Nam orci nulla, rhoncus pulvinar iaculis nec, faucibus nec massa.

              In vulputate eros at leo pretium ullamcorper. Morbi venenatis in ex a placerat. Nunc egestas ante id lectus fermentum, quis tristique
              arcu iaculis. Etiam ac elit at magna tempor faucibus eget quis velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
              per inceptos himenaeos. Cras commodo placerat arcu, id pharetra lectus. Pellentesque rhoncus pulvinar ex, sed placerat dui malesuada eu.
              Fusce laoreet, nisl in venenatis lacinia, lacus sem vehicula diam, id elementum nibh quam eget sem. Duis tincidunt ullamcorper eros, in varius
              turpis mattis nec. Aliquam a libero in enim aliquam tempus. Aenean sit amet libero sit amet mi congue suscipit a quis nibh.
              sem porta.
            </p>
         </div>
     </div>



     <div id="cookie-monster-picture">
      <img id="cookie-moster" src="cookie-monster.png" align="middle"/>
</div>
     </main>

     <footer>



     </footer>

</html>
