<?php
    session_start();
    include("ket_noi.php");
    include("chuc_nang/ham/ham.php");  

    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
    }
    if(isset($_POST['cap_nhat_gio_hang']))
    {
        include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
        trang_truoc();
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TRANG WEB QUAN LI BAN HANG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Quản lí bán hàng</h1>
    <table width="100%">
        <tr>
            <td colspan="3" >
                <?php include("chuc_nang/banner/banner.php"); ?>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="login">
                    <a href="http://localhost/web%20dh10c8/web_ban_hang/quan_tri/index.php" >Đăng nhập</a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3" >
                    <?php
                    include("chuc_nang/menu_ngang/menu_ngang.php");
                        ?>
                
            </td>    
        </tr>
        <tr>
            <td width="170px" height="100%" valign="top">
                <div class="left">
                    <?php
                        include("chuc_nang/menu_doc/menu_doc.php");
                        include("chuc_nang/san_pham/moi.php");
                       
                    ?>
                </div>
            </td>
            <td width="650px" valign="top">
                <div class="content">
                    <?php
                        include("chuc_nang/dieu_huong.php");
                    ?>
                </div>
            </td>
            
            <td width="170px" valign="top">
            <div class="right">
                <?php
                        include("chuc_nang/tim_kiem/vung_tim_kiem.php");
                        include("chuc_nang/gio_hang/vung_gio_hang.php");
                        include("chuc_nang/san_pham/noi_bat.php");
                        
                ?>
            </div>
            </td>            
        </tr>
        <tr>
            <td colspan="3">
                <div class="footer">
                    <?php include("chuc_nang/footer/footer.php"); ?>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>