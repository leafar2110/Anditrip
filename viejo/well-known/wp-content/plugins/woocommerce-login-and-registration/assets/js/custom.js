jQuery(document).ready(function(){jQuery(".header_login").colorbox({className:"plrp_logreg",width:"50%",height:"525px",inline:!0,href:"#login_data",opacity:.5,closeButton:!0}),jQuery(".header_signup").colorbox({className:"plrp_logreg",width:"50%",height:"460px",inline:!0,href:"#signup_data",opacity:.5,closeButton:!0}),jQuery(".phoen-login-popup-open").colorbox({className:"plrp_logreg",width:"50%",height:"525px",inline:!0,href:"#phoen_login_data_val",opacity:.5,closeButton:!0}),jQuery(".phoen-signup-popup-open").colorbox({className:"plrp_logreg",width:"50%",height:"460px",inline:!0,href:"#phoen_signup_data_val",opacity:.5,closeButton:!0}),jQuery(".phoen-login-signup-popup-open").colorbox({className:"plrp_logreg",width:"50%",height:"525px",inline:!0,href:"#phoen_login_data",opacity:.5,closeButton:!0}),jQuery(".phoen_login").colorbox({className:"plrp_logreg",width:"50%",height:"525px",inline:!0,href:"#phoen_login_data",opacity:.5,closeButton:!0}),jQuery(".phoen_signup").colorbox({className:"plrp_logreg",width:"50%",height:"460px",inline:!0,href:"#phoen_signup_data",opacity:.5,closeButton:!0}),jQuery(".js_login_log").click(function(e){e.preventDefault();var o=jQuery(this).closest("#js_login").find('input[name="username"]').val(),n=jQuery(this).closest("#js_login").find('input[name="password"]').val(),i=jQuery(this).closest("#js_login").find('input[name="rememberme"]').val(),l=jQuery(this).closest("#js_login").find('input[name="_wpnonce_phoe_login_pop_form"]').val(),r=jQuery(this).closest("#js_login").find('input[name="_wp_http_referer"]').val();jQuery(".loader1").show(),jQuery.ajax({type:"POST",url:woo_log_ajaxurl.ajaxurl,data:{action:"val_header",username:o,password:n,rememberme:i,wpnonce:l},success:function(e,o){"1"==e?(jQuery(".loader1").hide(),window.location.href=r):(jQuery(".loader1").hide(),jQuery(".result1").html(e))}})}),jQuery(".phoen_reg").click(function(e){e.preventDefault();var o=jQuery(this).closest("#js_signup").find('input[name="email"]').val(),n=jQuery(this).closest("#js_signup").find('input[name="password"]').val(),i=jQuery(this).closest("#js_signup").find('input[name="_wp_http_referer"]').val(),l=jQuery(this).closest("#js_signup").find('input[name="_wpnonce_phoe_register_pop_form"]').val();jQuery(".loader_reg").show(),jQuery.ajax({type:"POST",url:woo_log_ajaxurl.ajaxurl,data:{action:"val_header_signup",email:o,password:n,wpnonce:l},success:function(e,o){"1"==e?(jQuery(".loader_reg").hide(),window.location.href=i):(jQuery(".loader_reg").hide(),jQuery(".result2").html(e))}})})});