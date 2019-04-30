<div id="loader-g" class="loader" >
  <div class="animate-load">
    
  <div id="loading"></div>
<div class="dots-loader" id="loading-text"><p><svg id="jet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="100px" height="100px" class=""><g><path style="fill:#FD003A;" d="M256,0C156.698,0,76,80.7,76,180c0,33.6,9.302,66.301,27.001,94.501l140.797,230.414  c2.402,3.9,6.002,6.301,10.203,6.901c5.698,0.899,12.001-1.5,15.3-7.2l141.2-232.516C427.299,244.501,436,212.401,436,180  C436,80.7,355.302,0,256,0z M256,270c-50.398,0-90-40.8-90-90c0-49.501,40.499-90,90-90s90,40.499,90,90  C346,228.9,306.999,270,256,270z" data-original="#FD003A" class=""/><path style="fill:#E50027" d="M256,0v90c49.501,0,90,40.499,90,90c0,48.9-39.001,90-90,90v241.991  c5.119,0.119,10.383-2.335,13.3-7.375L410.5,272.1c16.799-27.599,25.5-59.699,25.5-92.1C436,80.7,355.302,0,256,0z" data-original="#E50027" class="active-path" data-old_color="#FD003A"/></g> </svg>
</p>
</div>





</article>
  </div>


</div>


<style>

@keyframes load-progress { 100% {
    margin-left: -80px;
    margin-top: -80px;
    border-width: 80px;
    opacity: 0;
    }}

@keyframes jet {
     0% {transform: scale(1, 0.8);}
     5% {transform: scale(0, 0.8);}
    10% {transform: scale(1, 0.8);}
    15% {transform: scale(0, 0.8);}
    20% {transform: scale(1, 0.8);}
    25% {transform: scale(0, 0.8);}
    30% {transform: scale(0.8, 0.8);}
    50% {transform: scale(0.8, 0.8);}
    75% {transform: scale(0.8, 0.6);}
   100% {transform: scale(0.8, 0.8);}
}

#loading {
    width: 0;
    height: 0;
    position: fixed;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    border: 1px solid #615d5d;
    -webkit-animation: load-progress 1s infinite;  
    animation: load-progress 1s infinite;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    opacity: 0.6;
}

#loading-text {
    width: 200px;
    height: 200px;
    left: 50%;
    top: 50%;
    margin-left: -100px;
    margin-top: -100px;
    position: absolute;
    display: table;
}

#loading-text p {
    font-family: Tahoma, Helvetica, sans-serif;
    font-size: 18px;
    text-align: center;
    color: #888;
    margin: 0;
    display: table-cell;
    vertical-align: middle;
}

#jet {
    transform: scale(1, 0.8);
    opacity: 0.8;
    animation: jet 2s linear infinite;
}

.muelle{
  position: absolute;
    left: -99%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    top: -23%;
}
.loader{
    position:fixed;
    top:0;
    left:0;
    bottom:0;
    right:0;
    background:#fff;
    z-index:999999999;
    display: flex;
align-items: center;
justify-content: center;
}.loading * {
  display: none;
}


</style>

<script>
jQuery(document).ready(function(){

jQuery("#loader-g").fadeOut("slow");

});

</script>

