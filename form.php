<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css"> -->

    <title>contact</title>
</head>
<body>
    <h1>contact</h1>
    <form action="process-form.php" method="post">
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>
        <label for="priority">priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
        </select>
        <fieldset>
            <legend>type</legend>
         <label>
             <input type="radio" name="type" value="1" checked>Complaint
         </label>
         <br>
         <label>
             <input type="radio" name="type" value="2">Sujection
         </label>
        </fieldset>
        <label> 
         <input type="checkbox" name="terms">I agree to the terms and conditions
        </label>
        <br>
        <button>send</button>
    </form>
    <form action="lister.php" method="post">
        <button>verifier</button> 
    </form>
        
    <form action="update.php" method="post">
        <button>Modifier</button> 
    </form>
</body>
</html>