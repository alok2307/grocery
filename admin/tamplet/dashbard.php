
<section id="dashboard" class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 bg-light m-0">
                        <?php include ("list_of_product.php");  ?>
                    </div>

                    <div class="col-sm-10 ">
                    <?php
                        @$opt = $_GET['option'];
                        if($opt=="")
                        {
                        ?>
                        <?php
                        error_reporting(1);
                        }
                        else{
                        switch($opt)
                        {
                            
                            // case 'dashboard':
                            // include('dash.php');
                            // break;  
                            
                            case 'banner-area':
                            include('banner.php');
                            break;

                            case 'banner-adds':
                            include('banner_adds.php');
                            break;

                            case 'latest-sale':
                            include('latest_sale.php');
                            break;

                            case 'fruits':
                            include('fruit.php');
                            break;

                            case 'vegitables':
                            include('vagitable.php');
                            break;

                            case 'drink':
                            include('soft_drink.php');
                            break;

                            case 'bread':
                            include('bread.php');
                            break;

                            case 'oil':
                            include('oil.php');
                            break;
                        }}

                        ?>
                    </div>
                </div>
            </div>
</section>





