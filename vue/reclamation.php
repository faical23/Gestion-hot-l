<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reclamation</title>
</head>
<body>
<form action="../controller/logic_reclamation.php" method="POST">
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">NAME</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Name" type="text">
            </div> 
           <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">EMAIL</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Email" type="text">
            </div>
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">SUBJECT</label>
                <input class="w-full  border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Subject" type="text">
            </div> 
            <div class="mb-3">
                <label class="block mb-2 font-bold text-gray-800" for="Fname">Reclamation</label>
                <textarea class="w-full  h-50 border-2 border-gray-400 pb-2 pt-2 pl-5 rounded outline-none focus:border-blue-400" name="Messsage" type="text"></textarea>
            </div> 
            <button class="btn w-full bg-purple-600 py-4 rounded text-white font-semibold  hover:bg-white hover:text-purple-800  " name="valide_message">Sign up</button>
            
        </form>


    
</body>
</html>