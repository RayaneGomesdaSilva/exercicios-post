<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes</title>
</head>
<body>
    <form>
    <p>Universos</p> 
    
        <select name="heroi" id="heroi">

            <option name="aqua">Aquaman</option>
            <option name="bat">Batman</option>
            <option name="ca">Capitao América</option>
            <option name="ferro">Homem de Ferro</option>
            <option name="sh">Superman</option>
            <option name="ha">Homem-Aranha</option>
            <option name="thor">Thor</option>
            <option name="mm">Mulher Maravilha</option>
            <option name="verde">Lanterna Verde</option>
            <option name="hulk">Hulk</option>

        <input type="radio" id="marvel" name="universo" value="Marvel">     
        <label for="marvel">Marvel</label><br> 

         <input type="radio" id="dc" name="universo" value="DC">
         <label for="dc">DC</label><br>

        </select>
        <input type="submit">
    
    </form>
</body>
</html>