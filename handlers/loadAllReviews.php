<?php include('../inc/config.php');

$ReviewDAO = new ReviewDAO($db);
$Reviews = $ReviewDAO->getReviewsByPage($_GET['page']);
$reviewCount = $ReviewDAO->getTotalReviewCount();
$reviewCount=22;
?>
<style>
    .reviewBlock {height:144px;max-height:144px;}
    @media only screen and (max-width: 990px) {
        .reviewBlock {max-height:100px;}
    }
</style>
<img id="reviewResponseLoading" src="<?php echo $webPath2;?>img/loading.gif" style="display:none;">
<?php foreach($Reviews as $Review){ ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="bg-primary" style="color:white;border-radius:3px;border-shadow:1px 1px 3px grey;">
            <p class="reviewBlock" style="text-transform: capitalize;font-style:italic;padding:0px 3px;text-align:left;">"&nbsp;<?php echo substr($Review->getContent(),0,140).'...';?>&nbsp;"
                <span class="uppercase" style="font-style:oblique;display:block;text-align:right;padding:0px 3px;">- <u><?php echo $Review->getName();?></u></span>
            </p>
        </div>
    </div>
<?php } ?>
<style>
    .reviewPageUl li {display:inline;}
    .reviewPageUl li {margin:3px;padding:3px;background:lightgrey;font-size:18px;border-radius:3px;color:#b44c99 !important;}
</style>
<div class="col-xs-12">
<ul class="reviewPageUl">
<?php
$startNum = ($_GET['page']-1).'0';
if($startNum<0){
    $startNum=0;
}
if($reviewCount<=10){
    echo '<li>1</li>';
}else {
    for ($i = $startNum; $i <= ($reviewCount + 1); $i=$i+10) {

        if(substr($i,0,1)!='0' and substr($i,0,1)!=''){
            echo '<li>';
            echo '<a class="page" href="javascript:void(0);" data-page="'.substr($i,0,1).'">';
            if(substr($i,0,1)==$_GET['page']){
                echo '<u><strong>'.substr($i,0,1).'</strong></u>';
            }else{
                echo substr($i,0,1);
            }
            echo '</a>';
            echo '</li>';
        }
    }
}
?>
</ul>
</div>
<script>
    $(document).ready(function() {
        $('.page').click(function () {
            var pageNum = $(this).attr('data-page');
            $.ajax({
                method: 'GET',
                url: "<?php echo $webPath2;?>loadAllReviews.php?page="+pageNum,
                beforeSend: function () {
                    $('#reviewResponse').html('<img id="reviewResponseLoading" src="<?php echo $webPath2;?>img/loading.gif" style="display:none;">');
                    $('#reviewResponseLoading').show();
                },
                success: function (data) {
                    $('#reviewResponseLoading').hide();
                    if (data != '') {
                        $('#reviewResponse').html(data);
                    } else {
                        alert('there was an internal error on the page handler @ loadAllReviews.php, no data was returned');
                    }
                }
            });
        });
    });
</script>

