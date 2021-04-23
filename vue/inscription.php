<?Php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<div class="zone_form bg-grey p-10 mb-10  rounded  shadow  border-blue-800 bg-white">
        <h2 class="text-2xl  font-bold mb-10 text-purple-800">CREATE YOUR ACCOUNT</h2>
        <form  action="../controller/logic_inscription.php" method="POST">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">FIRST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="FirstName" id="firsttest" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">LAST NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400"name="LastName" type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PHONE NUMBER</label>      
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="PhoneNumber" type="text">
                </div>
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">PASSWORD</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Password" type="text">
            </div>
            <div class=" mb-3 flex items-center">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree" class="ml-2 text-gray-800 text-sm">I agree with all rules</label>

            </div>
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  " name="valide">Sign up</button>     
        </form>
    </div>
</body>
</html>