<!DOCTYPE html>
<html>
    <head>
        <title>A Swimming Pool Calculator</title>
        <style>
            body {
                margin: auto;
                max-width: 500px;
                padding-top: 10%;
            }
            h1 {
                text-align: center;
            }
            .right {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h1>Swimming Pool Calculator</h1>
        <p>How much water will it take to fill an above-ground pool?</p>
        <p>Input the values in the text boxes.</p>
        <form method="get" action="calculate.php">
            <table>
                <tr><td class="right">Enter the Diameter:</td><td><input type="text" name="diameter" width="100"></td></tr>
                <tr><td class="right">Enter the Depth:</td><td><input type="text" name="depth" width="100"></td></tr>
                <tr><td class="right" colspan="2"><input type="submit" value="Submit"></td></tr>
            </table>
        </form>
    </body>
</html>