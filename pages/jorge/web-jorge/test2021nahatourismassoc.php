<?php
  session_start();
  if(!isset($_COOKIE['nahatourismassoc_user_id'])) {
    header('Location: /jorge/login?origin=web-jorge/test2021nahatourismassoc');
    exit;
  }
  $title = "Jorge test | Tourist Information Chatbot";
  require '../../../page_parts/web_header.php';
?>
  <!-- chatbot-connecting -->
  <script type="text/javascript">
    var __const = window.__const || [];
    __const['host'] = "https://dialog.kuzen.io";
    __const['access_token'] = "b8e384ef5d8d67f2feb0d0cb54e40384";
    __const['secret_token'] = "f43e7c7a947a86a188cd5dbdf049ee7b";
    var app = (function(doc, scr){
      var created_element = doc.createElement(scr),
          sub_ele = doc.getElementsByTagName(scr)[0];
      created_element.type = 'text/javascript'
      created_element.async = true;
      created_element.setAttribute('charset','utf-8');
      created_element.src = __const['host'] + '/chat_app_logic.js';
      sub_ele.parentNode.insertBefore(created_element, sub_ele);
    })(document, 'script');
  </script>
</head>
<body>
</body>
</html>
