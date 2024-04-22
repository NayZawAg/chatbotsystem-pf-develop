var __const = window.__const || [];
__const['host'] = "https://admin.conciergeu.com";
__const['access_token'] = "9d7fff59f777fc1673a139c7b6535b82";
__const['secret_token'] = "5ab24f61530e4bc6de02134b4ecc4b08";
var app = (function(doc ,scr){
  var created_element = doc.createElement(scr),
      sub_ele = doc.getElementsByTagName(scr)[0];
  created_element.type = 'text/javascript'
  created_element.async = true;
  created_element.setAttribute('charset','utf-8')
  created_element.src = __const['host'] + '/chat_app_logic.js'
  sub_ele.parentNode.insertBefore(created_element, sub_ele)
})(document, 'script')
