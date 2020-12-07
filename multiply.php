<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="background">

    <nav class="navbar navbar-expand-sm bg-warning navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="substract.php">Substract</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="multiply.php">Multiply</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="div.php">Division</a>
          </li>
        </ul>
      </nav>
      <center><p class="text">Calculator</p></center>
    
               
                <table class="table">
                    <tr>
                        <td><p class="ptext">Number 1:</p></td>
                        <td><input type="text" class="flow-control" id="num1"></td>
                    </tr>

                    <tr>
                        <td><p class="ptext">Number 2:</p></td>
                        <td><input type="text" class="flow-control" id="num2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><Button onclick="multiplynumber()" class="btn btn-success">Multiply</Button></td>
                    </tr>

                    <tr>
                        <td><p class="ptext">The result is :</p></td>
                        <td><p id="res"></p></td>
                    </tr>
                </table>
            </div>
        </div>
        
    </div>
    <script>
        function multiplynumber()
        {
            var num1 =parseInt(document.getElementById("num1").value)
            var num2 =parseInt(document.getElementById("num2").value)
            var result =num1*num2
            
            document.getElementById("res").innerHTML=result
            console.log(result)
        }

    </script>
</body>
</html>