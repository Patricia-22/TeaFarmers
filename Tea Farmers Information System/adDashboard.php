<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>

<style>
  body{
    margin: 0px;
    border: 0px;
  }
  #header {
    width: 100%;
    height: 120px;
    background: black;
    color: whitesmoke;

  }
  #sidebar {
    width : 300px ;
    height: 400px;
    background: #004D40 ;
    float: left;
  }
  #data {
    height: 700px;
    background: #004D40 ;
  }
#adminlogo {
  background: white;
   border-radius: 50px;
  </style>
}
ul li {
  padding: 20 px:
  border-bottom : solid grey;
}
</head>
<body>
 <div id="header">
  <center><img src="Images/admin.png" alt="adminLogo"> <br>Administrator Panel</center>
   
 </div>
 <div id="sidebar">
   <ul>
    <li>Create Farmer Profile</li>
    <li>Manage Farmer Profile</li>
    <li>Reports</li>
    <li>Log Out</li>

   </ul>
 </div>
 <div id="data"></div>
</body>
</html>