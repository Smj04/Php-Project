<?php

$click = $_GET['click'];

switch($click){
    case "인생은 실전이다" : ?> 
        <script>location.href='https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=279202717'</script>
        <?php break;
    case "방구석 심리학 실험실" : ?> 
        <script>location.href='https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=278014364'</script>
        <?php break;
     case "작별하지 않는다" : ?> 
        <script>location.href='https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=278770576'</script>
        <?php break;
    default : ?> 
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/search/wsearchresult.aspx?SearchTarget=All&SearchWord=<?php echo "$titles"?>&x=0&y=0'> <?php break;
}
?>
