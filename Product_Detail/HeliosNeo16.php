<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web bán hàng</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header>
        <div class="header">
        <a href="../index.php" style="margin-right: 80px; font-size: 30px;"><img src="../img/LogoHelloWorld1.png" style="height: 50px; width: 200px;"></a>
        
        <nav class="navbar">
            
            <div class="search-box">
            <input type="text" class="searchText" placeholder="Tìm Kiếm Sản Phẩm">
            <a href="" class="searchBtn" style="padding-bottom: 0px;"><i class='bx bx-search' style="font-size: 25px;" ></i></a>
            </div>

            <div class="menu">
            <a href="../index.php" style="padding: 0px 20px 0px 0px ;"><b>Home</b></a>
            <a href="../About.php" style="padding: 0px 20px;"><b>About</b></a>
            <a href="../Contact.php" style="padding: 0px 20px;"><b>Contact</b></a>
            <a href="" style="padding: 0px 20px;"><i class='bx bx-cart-alt' style="font-size: 30px;"></i></a>
            <a href="" style="padding: 0px 20px;"><i class='bx bxs-user' style="font-size: 30px;"></i></a>
            </div>
        </nav>
        </div>

        <div class="classification">
            <a href="../Mouse.php" style="padding: 0px 20px 10px 20px; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i class='bx bx-mouse-alt' ></i> Chuột</a>
            <a href="../Keyboard.php" style="padding: 0px 20px 10px 20px; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i class='bx bxs-keyboard' ></i> Bàn phím</a>
            <a href="../Laptop.php" style="padding: 0px 20px 10px 20px; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i class='bx bx-laptop' ></i> Laptop</a>
        </div>
    </div>
    </header>  

    <div style="margin-top: 200px; padding: 20px 150px;">
        <div style="display: flex">
            <!--PHẦN HÌNH ẢNH-->
            <div style="margin-right: 50px;">
                <img src="../img/Helios Neo16.jpg" class="image" alt="Sản phẩm 3" style="width:250px ; height: 250px">
            </div>
            <!--PHẦN THÔNG TIN SẢN PHẨM-->
            <div style="width: 500px; margin-top: 30px;">
                <!-- TÊN SẢN PHẨM -->
                <div style="color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                font-size: 20px;">
                    <p>Helios NEO 16</p>
                </div>
                <!--Giá-->
                <div id="price" style="color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                font-size: 20px; margin-top: 10px">
                    <p>Giá: 30.000.000đ</p>
                </div>
                <p style="color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                font-size: 20px; margin-top: 10px">Dòng Laptop Gaming Khá Nổi Tiếng Của ACER</p>
                <!--PHẦN CHỌN SỐ LƯỢNG VÀ THÊM VÀO GIỎ HÀNG-->
                <div style="margin-top: 30px;">
                    <label for="quantity" style="color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                    font-size: 20px;">QUANTITY:</label>
                    <select id="quantity" style="font-size: 20px">
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

    <!--DANH SÁCH CÁC SẢN PHẨM KHÁC-->
    <div class="display-product" style="margin-top: 20px;" >
        <div class="banner"><b><i>SẢN PHẨM KHÁC</i></b></div>
        <section class="product-list" style="display: flex; justify-content: center;">
            <div class="product-illu">
                <a href="#">
                  <img src="../img/LogiMouse.jpg" class="image" alt="Sản phẩm 1">
                  <h2>Sản phẩm 1</h2>
                  <p>Giá: 1.000.000đ</p>
                </a>
            </div>  
            <div class="product-illu">
                <a href="#">
                  <img src="../img/LogiMouse2.jpg" class="image" alt="Sản phẩm 2">
                  <h2>Sản phẩm 2</h2>
                  <p>Giá: 2.000.000đ</p>
                </a>
            </div>   
            <div class="product-illu">
                <a href="#">
                  <img src="../img/RazerMouse.jpg" class="image" alt="Sản phẩm 3">
                  <h2>Sản phẩm 3</h2>
                  <p>Giá: 3.000.000đ</p>
                </a>
            </div>  
            <div class="product-illu">
              <a href="#">
                <img src="../img/DareUMouse.jpg" class="image" alt="Sản phẩm 1">
                <h2>Sản phẩm 4</h2>
                <p>Giá: 1.000.000đ</p>
              </a>
          </div>  
          <div class="product-illu">
              <a href="#">
                <img src="../img/Akko MG108.jpg" class="image" alt="Sản phẩm 2">
                <h2>Sản phẩm 5</h2>
                <p>Giá: 2.000.000đ</p>
              </a>
          </div>   
          <div class="product-illu">
              <a href="#">
                <img src="../img/Helios Neo16.jpg" class="image" alt="Sản phẩm 3">
                <h2>Sản phẩm 6</h2>
                <p>Giá: 3.000.000đ</p>
              </a>
          </div>  
            
          </section>

    </div>
</body>
</html>