                <?php 
                session_start();                
                if(isset($_GET['x']) && $_GET['x']=='dashboard'){
                    $page = "Dashboard.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x']=='order'){
                    if($_SESSION['level_kedai']==1 || $_SESSION['level_kedai']==2 || $_SESSION['level_kedai']==3) {
                    $page = "order.php";
                    include "main.php";
                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }
                }elseif(isset($_GET['x']) && $_GET['x']=='transaksi'){
                    if($_SESSION['level_kedai']==1 || $_SESSION['level_kedai']==2 || $_SESSION['level_kedai']==3) {
                    $page = "Transaksi.php";
                    include "main.php";
                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }
                }elseif(isset($_GET['x']) && $_GET['x']=='user'){
                    if($_SESSION['level_kedai']==1){
                        $page = "user.php";
                        include "main.php";
                    }else{
                        $page = "Dashboard.php";
                        include "main.php";
                    }
                }elseif(isset($_GET['x']) && $_GET['x']=='report'){

                    if($_SESSION['level_kedai']==1 || $_SESSION['level_kedai']==2 || $_SESSION['level_kedai']==3){
                        $page = "report.php";
                        include "main.php";
                    }else{
                        $page = "Dashboard.php";
                        include "main.php";
                    }


                }elseif(isset($_GET['x']) && $_GET['x']=='menu'){
                    if($_SESSION['level_kedai']==1 || $_SESSION['level_kedai']==2 || $_SESSION['level_kedai']==3) {
                    $page = "menu.php";
                    include "main.php";
                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }

                }elseif(isset($_GET['x']) && $_GET['x']=='login'){
                    include "login.php";
                }elseif(isset($_GET['x']) && $_GET['x']=='logout'){
                    include "../proses/proses_logout.php";


                }elseif(isset($_GET['x']) && $_GET['x']=='kategori'){
                    if($_SESSION['level_kedai']==1) {
                    $page = "katmenu.php";
                    include "main.php";
                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }

                }elseif(isset($_GET['x']) && $_GET['x']=='orderitem'){
                    if($_SESSION['level_kedai']==1 || $_SESSION['level_kedai']==2 || $_SESSION['level_kedai']==3) {
                    $page = "order_item.php";
                    include "main.php";
                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }

                }elseif(isset($_GET['x']) && $_GET['x']=='viewitem'){
                    if($_SESSION['level_kedai']==1 || $_SESSION['level_kedai']==2 || $_SESSION['level_kedai']==3) {
                    $page = "view_item.php";
                    include "main.php";
                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }

                }else{
                    $page = "Dashboard.php";
                    include "main.php";
                }
                ?>