<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">

                <ul id="citiesContainer"></ul>
                <button onclick="getCities();">getCities</button>
                <hr>
                <input type="text" id="name" placeholder="Name"/>
                <button onclick="addCity();">add</button>

                <hr>
                <input type="number" id="city_id" placeholder="City id"/>
                <input type="number" id="deliver_id" placeholder="deliver id"/>
                <button onclick="link();">add</button>

            </div>
        </div>
    </body>
</html>

<script>
    function link(){
        let city_id = $("#city_id").val()
        let deliver_id = $("#deliver_id").val()

        $.ajax({
            url: "./api/cities/"+city_id+"/"+deliver_id, type:"POST",
            //data: JSON.stringify({name: name}),
            contentType:'application/json; charset=utf-8',
            dataType:'json',
            success:(response)=>{
                console.log("response: ",response);
                alert("linked");
                getCities();
            },
            error:(error)=>{
                console.error("Error: ",error);
            },
        });
    }


    function addCity(){
        let name = $("#name").val()

        $.ajax({
            url: "./api/cities", type:"POST",
            data: JSON.stringify({name: name}),
            contentType:'application/json; charset=utf-8',
            dataType:'json',
            success:(response)=>{
                console.log("response: ",response);
                alert("inserted");
                getCities();
            },
            error:(error)=>{
                console.error("Error: ",error);
            },
        });
    }

    function getCities(){
        $.ajax({
            url: "./api/cities", type:"GET",
            success:(response)=>{
                console.log("response: ",response);
                $("#citiesContainer").empty();
                response.forEach((item)=>{
                    let row = "<li>"+item.name+"</li>";
                    $("#citiesContainer").append(row);
                    //console.log("==> ",item.name);
                })
            },
            error:(error)=>{
                console.error("Error: ",error);
            },
        });
    }

</script>
