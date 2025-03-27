<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>{{ config('APP.TITLE','Document') }}</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #000000;
        color: #ffffff;
        font-family: sans-serif;
        text-align: center;
        padding: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }

    h1 {
        font-size: 50px;
        margin-bottom: 20px;
    }

    .version {
        position: fixed;
        bottom: 10px;
        left: 10px;
        font-size: 12px;
        text-align: left;

        & p {
            color: #888888;
        }
    }
</style>

<body>
    <img src="/favicon.ico" alt="Logo" style="width: 100px; height: 100px; margin-bottom: 20px;">
    <h1>{{ config('APP.TITLE','Document') }}</h1>

    <div class="version">
        <p>Davinci version {{ app()->version() }}</p>
        <p>PHP version {{ phpversion() }}</p>
    </div>
</body>

</html>