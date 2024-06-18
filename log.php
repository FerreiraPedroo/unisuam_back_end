<?php
/*
 * Pocket PHP
 */

?>

<html>
<head>



<style>
* {
    marging:0;
    padding:0;
}

#log-container {
    display:flex;
    flex-direction: column;
    align-items: center;
    gap: 16px;
}

#log-user-info {
    width: 480px;
    display:flex;
    padding: 16px;
    gap: 10px;
    border: 2px solid #555;
    border-radius: 8px;
}

#log-user-img {
    width: 128px;
    height: 128px;
}
#log-user-name {
    font-size: 20px;
    color: darkblue;
}
#log-user-status {
    font-size: 18px;
}
#log-user-status-active {
    color: green;
}
#log-user-status-inactive {
    color: red;
}

#log-text {
    width: 100%;
    padding: 6px;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}

#log-head-container {
    width: 80%;
    place-items:center;
}

#log-head {
    width:100%;
    display:flex;
    gap:10px;
    color: #FFF;
    background-color: #20124d;
    border: 1px solid #000;
}

.log-data-list {
    width:100%;
    height: 32px;
    display:flex;
    padding: 6px 0;
    place-items:center;
    gap:10px;
    background-color: #EEE;
    border: 1px solid #000;
    border-top: 0;
}

.log-data-1 {
    width: 160px;
    text-align: center;
    padding: 4px;
}
.log-data-2 {
    width:320px;
    padding: 4px;
}
.log-data-3 {
    width: 128px;
    text-align: center;
    padding: 4px;
}
.log-data-4 {
    width: 100%;
    padding: 4px;
}
.log-data-5 {
    width: 128px;
    text-align: center;
    padding: 4px;
}

</style>

</head>
<body>

<div id='log-container'>
  <div id='log-user-info'>
    <img id='log-user-img' src='' alt='foto'/>
    <div>
        <div id='log-user-name'>Nome do usuario</div>
        <div id='log-user-status' class='<?php $user['status'] == 'ativo' ? 'log-user-status-active' : 'log-user-inactive'; ?> '>Ativo</div>
    </div>
  </div>

  <div id='log-text'>REGISTRO DE ATIVIDADES DO USUÁRIO</div>

  <div id='log-head-container'>

    <div id='log-head'>
        <div class='log-data-1'>DATA</div>
        <div class='log-data-2'>AÇÃO</div>
        <div class='log-data-3'>USUARIO</div>
        <div class='log-data-4'>DADOS</div>
        <div class='log-data-5'>IP</div>
    </div>

    <div class='log-data-list'>
        <div class='log-data-1'>10/05/2070 10:59:59</div>
        <div class='log-data-2'>[LOGIN]USER/PASS/OK</div>
        <div class='log-data-3'>-</div>
        <div class='log-data-4'>usuario:12345/senha:1234</div>
        <div class='log-data-5'>127.0.0.1</div>
    </div>

    <div  class='log-data-list'>
        <div class='log-data-1'>10/05/2070 10:59:59</div>
        <div class='log-data-2'>[LOGIN]2MFA/OK</div>
        <div class='log-data-3'>5</div>
        <div class='log-data-4'>2MFA:Data Nascimento/dados:10/10/1970</div>
        <div class='log-data-5'>127.0.0.1</div>
    </div>
    
    
  </div>


</div>



</body>


</html>
