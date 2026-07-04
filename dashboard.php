<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAFF LEAVE FORM</title>
    
</head>
<body>
    <header>
        <h1>
            SRM TRICHY ARTS AND SCIENCE COLLEGE THIRUCHIRAPALLI
        </h1>
        <img src="heding logo.jpg" alt="">
    </header>


    <div class="app">
    <h3>APPLICATION FOR LEAVE-PERMISSION-OD-LEAVE CREDIT</h3>
    </div>

    <div class="selection"><h1>
        SELECT YOUR LEAVE TYPE
    </h1></div>
    <div class="button">
        <button onclick="window.location.href='cl.php'">CL </button>
        <button onclick="window.location.href='od.php'">OD</button>
        <button onclick="window.location.href='col.php'">PERMISSION</button>
        <button onclick="window.location.href='EMERGENCY.php'">EMERGENCY LEAVE</button>
    </div>
<style>
    header {
  display: flex;
  justify-content: center;  /* text left, logo right */
  align-items: center;
  padding: 20px 50px;
   background-color: #214569;
  color: white;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

header h1 {
  font-size: 24px;
  font-weight: bold;
  max-width: 70%;       /* prevents text overflow */
  line-height: 1.4;
}

header img {
  height: 80px;        /* control logo size */
  width: auto;
  border-radius: 80px;  
  margin-left: 10px;/* optional: rounded corners */
}
.app{
    justify-self: center;
}
div{
    justify-self: center;
}
.button{
    display: flex;
    flex-direction: column ;
    margin: 50px;
  width: 30%;
  gap: 30px
  
}
  button {
        background: linear-gradient(135deg, #4a90e2, #357ABD);
        color: white;
        font-size: 20px;
        font-weight: bold;
        padding: 15px 30px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        
    }
    button:hover {
        background: linear-gradient(135deg, #357ABD, #2C5AA0);
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
    h1{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        
    }
</style>
  
</body>
</html>