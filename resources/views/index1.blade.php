<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>
        search
    </title>
    <style>

        body{
            background-color: black;
            text-align: center;
        }

        .page{
            background-color: blue;
            border: 5px solid white;
            color: lime;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: red;
        }

    </style>
</head>
<body>

<div class="page">
    <div class="content">
        <div class="w-3/5 mx-auto my-8 p-4 border-2 rounded-lg bg-white">
            <div class="flex gap-8">
                <div class="w-2/4 py-2>">
                    <h1 class="text-4xl font-bold">Search by ID</h1>
                    <hr class="my-2">

                    <form>
                        @csrf

                        <label for="price" class="form-label" id="try">Search By ID</label>
                        <input id="id" type="text">
                        <button type="button" onclick="loadDoc()">Request data</button>


                    </form>
                <br>
                    <div id="te"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<p id="box"></p>

<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("box").innerHTML = this.responseText;
                const table = document.getElementById('te');
                //console.log(table);
                const result = JSON.parse(this.responseText);
                //console.log(result);
                table.innerHTML=`
                <table>
                    <tr>
                        <th>Id</th>
                        <th>payer id</th>
                        <th>payer email</th>
                        <th>amount</th>
                        <th>currency</th>
                        <th>payment_id</th>
                        <th>payment status</th>
                    </tr>
                    <tr>
                    <th>${result.id}</th>
                    <th>${result.payer_id}</th>
                    <th>${result.payer_email}</th>
                    <th>${result.amount}</th>
                    <th>${result.currency}</th>
                    <th>${result.payment_id}</th>
                    <th>${result.payment_status}</th>
                </tr>
            </table>`
            }
        };
        const id = document.getElementById('id').value;
        if(!id)
        {
            alert("empty");
            return;
        }

        xhttp.open("POST", "api/search?id="+id, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
    }
</script>

</body>
</html>
