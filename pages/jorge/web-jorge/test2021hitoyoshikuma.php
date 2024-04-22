<?php
  session_start();
  if(!isset($_COOKIE['hitoyoshikuma_user_id'])) {
    header('Location: /jorge/login?origin=web-jorge/test2021hitoyoshikuma');
    exit;
  }
  $title = "Jorge test | Tourist Information Chatbot";
  require '../../../page_parts/web_header.php';
?>
  <!-- chatbot-connecting -->
  <script type="text/javascript">
    var __const = window.__const || [];
    __const['host'] = "https://dialog.kuzen.io";
    __const['access_token'] = "b6183010842fe90a79fccdf751f1bb1b";
    __const['secret_token'] = "39dcec203b8cc28c55ebafccff864e27";
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
