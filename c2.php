<html>
    <body>
        <h1>Please Fill The Form First</h1>
        <form>
            <label><b>Name :</b></label><input type="text" id="NM"><br>
            <label><b>ID :</b></label><input type="number" id="ID"><br>
            <label><b>Email :</b></label><input type="mail" id="EM"><br>
            <label><b>Number :</b></label><input type="number" id="NB"><br>
            <button type="button" onclick="doit()">Submit</button>
        </form>
        <div>
            <p id="result"></p>
        </div>
    </body>
    <style>
        body{
            margin-top:100px;
            margin-left:200px;
            margin-right:200px;
            background-color:lightgray;
            padding:8px;
        }
        h1{
            text-align: center;
            color:green;
        }
        form{
            margin-top:12px;
            margin-bottom:12px;
            margin-left:12px;
            text-align:center;
            border:2px solid black;
            border-radius:12px;
            background-color:lightgreen;
            color:black;
        }
        form label{
            display:inline-block;
            width:80px;
            padding:3px;
        }
        form input{
            border-radius:7px;
            padding:5px;
            margin-top:3px;
        }
        form button{
            padding:4px;
            border-radius:6px;
            color:white;
            background-color:green;
            margin-top:4px;
            margin-bottom:4px;
        }
        div{
            text-align:center;
            margin-top:12px;
            margin-bottom:12px;
            margin-left:12px;
            border:2px solid black;
            border-radius:12px;
            background-color:lightgreen;
            color:black;
            width: 100%;
            height: 100px;
            display: none;
        }
    </style>
    <script>
        function doit(){
            var name=document.getElementById("NM").value;
            var id=document.getElementById("ID").value;
            var email=document.getElementById("EM").value;
            var number=document.getElementById("NB").value;
            if(name=="" || id=="" || email=="" || number==""){
                alert("Please Fill All The Fields");
            }
            else{
                document.getElementById("result").innerHTML="Name : "+name+"<br>ID : "+id+"<br>Email : "+email+"<br>Number : "+number;
                document.querySelector("div").style.display="block";
            }
        }
    </script>
</html>