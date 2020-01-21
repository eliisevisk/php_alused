<?php

require_once ('.conf.php');
require_once('conn.php');

$link = connect(HOSTNAME, USERNAME, USERPASS, DBNAME);


function table($table, $attrs) {
    $link = connect(HOSTNAME, USERNAME, USERPASS, DBNAME);
    $res = query($link, "select * from $table;");
    if (mysqli_num_rows($res) > 0) {
        $header = '<tr>';
        foreach ($attrs as $att) $header = "$header<th>$att</th>";
        $header = "$header</tr>";
        print("<table>$header");
        while ($row = mysqli_fetch_assoc($res)) {
            $doc = '<tr>';
            foreach ($attrs as $att) {
                $val = $row[$att];
                $doc = "$doc<td>$val</td>";
            }
            $doc = "$doc</tr>";
            print($doc);
        }
        print('</table>');
    } else {
        print('<p><i>0 results</i></p>');
    }
}


?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>The Brewery</title>
    <style>
        :root{
            --main-bg: #2d095c;
            --sec-color: #20366b;
            --border-color: #dd7777;
            --accent-color: #eae3e3;
        }


        html{
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            height: 100%;
            background: var(--main-bg);
            color: white;
        }
        table{
            height: auto;
            width: 400px;
            border: 1px solid var(--border-color);
            background: rgba(255, 255, 255, .3);
            color: black;
        }
        tr:nth-child(odd){
            background: rgba(255, 255, 255, .3);
        }
        tr{
            height: 35px;
            text-align: center;
        }
        .db__container{
            position: absolute;
            top:0;
            left: 0;
            padding: 20px;
            width: 500px;
            height: 1000px;
            border-right: 2px solid var(--border-color);
            background: var(--sec-color);
            overflow: hidden;
            overflow-y: auto;

        }

    </style>
</head>
<body>
<aside>

</aside>
<main>
    <div>
        <div>
            <div class='db__container'>
                <div class='' id='accounts'>
                    <h1>Accounts</h1>
                    <?php table('ACCOUNTS', ['id', 'balance', 'name']); ?>
                </div>
                <div class='' id='products'>
                    <h1>Products</h1>
                    <?php table('PRODUCTS', ['id', 'name', 'price', 'stocks', 'balance']); ?>
                </div>
                <div>
                    <h1>Purchases</h1>
                    <?php table('PURCHASES', ['id', 'product_id', 'account_id', 'time']); ?>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
</main>


</body>
</html>