<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <label class="switch">
        <input type="checkbox" id="check" onchange="changeMode()">
        <span class="slider"></span>
    </label>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script>
        const checkbox = document.querySelector("#check");
        const html = document.querySelector("html");
        const cookie = Cookies.get('mode')
        if (cookie == 'dark-mode') {
            html.classList.add("dark-mode");
            checkbox.checked =true
        }
        function changeMode(){
            html.classList.toggle("dark-mode");

            if (html.classList.contains('dark-mode')) {
                Cookies.set('mode', 'dark-mode', {expires: 7});
            } else {
                Cookies.set('mode', 'white-mode', {expires: 7});
            }
        }

    </script>
</body>

</html>