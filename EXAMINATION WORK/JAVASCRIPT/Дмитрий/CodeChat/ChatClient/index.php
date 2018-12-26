<!DOCTYPE html>
<html>
<head>
    <title>CodeChat</title>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>              
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/uikit.css" />
</head>
<body>    
    <div class=".uk-container container">
        <div class="block uk-align-center">
            <form name="form_chat" role="form" action="chat.php" method="post">
                <div class="data_input">
                    <input name="room_number "class="room_number uk-input uk-form-width-small" placeholder="Номер комнаты"> 
                    <input name="user_nic" class="user_nic uk-input uk-form-width-small" placeholder="Ник">
                    <input id="key" class="key_number uk-input uk-form-width-small" placeholder="Ключ"/>
                </div>
                <div class="chat_pole">
                <div class="message_chat ">
                    <div class="nick_chat uk-label"></div>
                    <div class="mess_chat"></div>
                </div>
                </div>
                <input  id="text" name="text_message" class="text_message uk-textarea code_text"/>
                <div class="decode_text uk-input uk-form-width-medium" type="text" placeholder="Расшифрованный текст"></div>
                <div class="button_send uk-button uk-button-primary" id="code_button">Отправить</div>
                <div class="button_get uk-button uk-button-primary" id="decode_button">Получить</div>
            </form>
        </div>
    </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script type="js/uikit.js"></script>
<script src="js/script.js"></script>
</html>