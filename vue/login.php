<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    

    
<div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800 bg-white">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">LOGIN</h2>
        <form  action="../controller//logic_login.php" method="POST">
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Password" type="text">
            </div>
            <div class=" mb-3 flex items-center">
                <input type="checkbox" id="agree">
                <label for="agree" class="ml-2 text-gray-800 text-sm" >Remember me</label>

            </div>
            <button class="mb-3 btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  "  name="valide_login">Login</button>
            <div class=" mb-3 block">
                <label for="agree" class="text-gray-800 text-sm hover:text-purple-800 "><a href="#">Forgot Password?</a></label>
            </div>
            <div class=" mb-3 block ">
                <label for="agree" class="text-gray-800 text-sm text-center rounded text-white font-semibold 	"><h2>OR</h2></label>
            </div>
            <div class="login_with mb-3  flex items-center  w-full   rounded  ">
         
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; width:60px ; padding:8px" xml:space="preserve">
<path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
	c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
	C103.821,274.792,107.225,292.797,113.47,309.408z"/>
<path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
	c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
	c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
<path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
	c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
	c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
<path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
	c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
	C318.115,0,375.068,22.126,419.404,58.936z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
<label class="text-purple-800 font-bold  " style="padding-left:25%;"><a href="#">Login with Google</a></label>


            </div>
            <div class="login_with mb-3  flex items-center  rounded  ">
                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg enable-background="new 0 0 24 24"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style=" width:60px ; padding:8px"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-6.932 0-5.046 7.85-5.322 9h-3.487v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877c.188-2.824-.761-5.016 2.051-5.016z" fill="#3b5999"/></svg>
                <label class="text-purple-800 font-bold  " style="padding-left:25%;"><a href="#">Login with Facebook</a></label>
        </div>
        </form>

    </div>
</body>
</html>