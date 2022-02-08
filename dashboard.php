<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Smart Frames</title>
</head>

<body>
    <main>

        <div class="grid">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Version</th>
                    <th>Header Length</th>
                    <th>Service</th>
                    <th>Identification</th>
                    <th>Flags Code</th>
                    <th>TTL</th>
                    <th>Protocol Name</th>
                    <th>Protocol Checksum Status</th>
                    <th>Protocol Ports From</th>
                    <th>Protocol Ports Destination</th>
                    <th>Header Checksum</th>
                    <th>IP From</th>
                    <th>IP Destination</th>
                    <th>Protocol Version</th>
                    <th>Protocol Content Type</th>
                    <th>Protocol Type</th>
                </tr>

                <?php include("includes/dashTable.php") ?>

            </table>
        </div>
    </main>
</body>

</html>