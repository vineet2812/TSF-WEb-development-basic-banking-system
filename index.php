<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAADGw8QAC3eqAPn5+QDq6uoAg4ODANvb2wA4iq0AnZWSAMW9vQDKysoAinprAMW3rQCLiIYArKysAOTm5gDa29wAjo6OAObm5gDx8fAAf39/APv8+gDX19cAyMjIAKurpwC5ubkAqqqqAI+UjgART24AxL2+ALivrADY2doA1tbSAAhUcQDk5OQAkZORAH19fQC2vrwA1dXVAOLg3wCvpJoA0MrLAIeXlwDAsKEA6ufkAPHx8QCKiooAxL68AMTExACquMYADW+iALWyrQD+/v4A7+/vAL62sgCIiIgA4ODgAI2CZwB5eXkA0dHRALOtqwD8/PwAhoaGAHd3dwDf3t4Az8/PAKKiogD6+voAtq+mAJOTkwDr6+sA6eTmAHV1dQDNzc0Axry7AKCgoAAATHoA6enpAJ+UiADa2toAc3NzAMvLywDUz9AAwr25ANfZ1QDa2dUA5+fnAICAgADY2NgAt7SyAJeaqgDO0M4AkIeNAL64rwCcnJwA5eXlAMTHxwDV1tYA1tDOAObl5QDPztQAb29vAKykngDSxcQAq6CZAOPj4wDU1NQA////AImJiQDh4eEAenp6ANLS0gDh3tkAvq2mALuwpgCono8A29nXAJOYoQClpaUA/f39AJaWlgDu7u4Ah4eHALOllADf398Ay93uAMHBwQDd29oACEJfAMO0tACjo6MA+/v7ANHMywDs7OwAhYWFAODk4gCTk5cA3d3dAMK6tABnZ2cAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAampqampqampqampqampqampqampqamohaC88ampqampqajxFNEAOK1KGUDp2ampqQl8sc2MwHHFcF0pON4RqamodiUN/MSgnXB8JdRkDNDNqEWc7G0tRcgtTOIdUGBZXangHKiABaXqAHlt0CjJqamoCDHB8BhVNNQ8aWSkkampqFAhmRiZhZVgFAIMiSWpqahIub34FP2JIR0F9WmBqajdMVYh7JW4hBBNtT3V9ampqRVcVBC1VEHkEIz5kioJqamp2bFdeXUQ2hVY5ZGpqampqanZeDYF3az1WFTxqampqampqampqamp2M2pqampqampqampqampqampqampqagAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
    <title>Bank of VP</title>
    <style type="text/css">
        button{
            position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1>Welcome To Bank of VP</h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <div class="h3">
            <div >
                <div >
                   <center> <h3>Now money transfer is just one click away.</h3></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="img/user.png" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transfer.png" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <img src="img/history.png" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button >Transaction History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer class="text-center mt-5 py-2">
        <p>Made by <b>Vineet Pashine.</b> <br> For the Internship project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
