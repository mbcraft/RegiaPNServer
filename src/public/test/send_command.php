<!DOCTYPE html>
<html>
    <head>
        <title>Send a command to the command server</title>
        <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
        function send_command() {
            server = "http://localhost:8081";
            command = $("#cmd").val();
            $("#command_form").attr("action",server+command);
            $("#command_form").submit();
        }
        
        </script>
        <label for="command">Command :</label>
        <input id="cmd" type="text" name="command" value="/stop" />
        <form id="command_form" method="post" action="">
            <input type="hidden" name="in" value="/home/marco/NetBeansProjects/RegiaPNServer/src/files/player_update_packages/1/player_1__19_04_2016.zip" />
            <input type="hidden" name="out" value="/home/marco/NetBeansProjects/RegiaPNServer/src/files/player_update_packages/1/1c914ff15/player_1__19_04_2016.pcu" />
            <button type="button" name="Invia comando!" value="Invia comando!" onclick="javascript:send_command();">Invia comando</button>
        </form>
    </body>
</html>