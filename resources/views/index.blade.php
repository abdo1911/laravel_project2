<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>
        home
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

    </style>
</head>
<body>

<div class="page">
    <div class="content">
        <h1>Welcome To PayPal</h1>

        <div class="w-3/5 mx-auto my-8 p-4 border-2 rounded-lg bg-white">
            <div class="flex gap-8">
                <div class="w-2/4 py-2>">
                    <h1 class="text-4xl font-bold">Abdelrahman yasser mohamed</h1>
                    <hr class="my-2">
                    <span class="my-4">My objective is to be able to work for an encouraging and stable company that will
                        assist me in developing, improving and obtaining the necessary skills in order to become the best
                        version of myself.
                    </span>
                    <br>
                    <br>

                    <form action="{{route('payment')}}" method="post">
                        @csrf
                        <label for="price" class="form-label">Price</label>
                        <input  name="amount">

                        <button id="btn1" type="submit" class="w-full hover:bg-gray-600 focus:bg-gray-800 text-white bg-gray-800 p-2 rounded-lg">
                            Pay with PayPal
                        </button>
                    </form>

                    <br>
                    <form action="{{route('f')}}" method="post">
                        @csrf
                        <button id="btn1" type="submit" class="w-full hover:bg-gray-600 focus:bg-gray-800 text-white bg-gray-800 p-2 rounded-lg">
                            Last transactions
                        </button>
                    </form>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const txt1 = document.getElementById('price');
</script>

</body>
</html>
