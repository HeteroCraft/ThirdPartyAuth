<?php
/*********************
 * 
 * HeteroCraft Auth 
 * 第三方验证
 * 
 * 登录跳转页
 * 
 * 
 * 请勿修改此页面!
 * 
 * © 江西幻厦游戏开发有限公司 2020-2021
 * 
 *********************/



    include 'inc.config.php';
?>
<script>
    window.location.href="https://account.heterocraft.com/auth/?id=<?php echo $config['auth_id']?>&key=<?php echo $config['auth_key']?>"
</script>