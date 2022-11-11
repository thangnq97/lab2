<?php
    $products = [
        [
            "name" => "iPhone 13 Pro Max",
            "image" => "https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-gold-1-600x600.jpg",
            "price" => 400,
        ],
        [
            "name" => "Xiaomi Mi 11 Lite",
            "image" => "https://cdn.tgdd.vn/Products/Images/42/233241/xiaomi-mi-11-lite-4g-black-1-200x200.jpg",
            "price" => 300,
        ],
        [
            "name" => "Samsung Galaxy S21",
            "image" => "https://cdn.tgdd.vn/Products/Images/42/226316/samsung-galaxy-s21-ultra-bac-600x600-1-200x200.jpg",
            "price" => 300,
        ]
        ];

    $menuList = ["HomePage","Products","Services","About Us","Contact"];    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                Roboto: "'Roboto', sans-serif",
              }
            }
          }
        }
      </script>
</head>
<body class="font-Roboto">
    <!-- wrapper -->
    <div class="lg:max-w-[1440px] lg:mx-auto">
        <!-- nav -->
        <div class="flex justify-between px-4 py-4 items-center md:flex-col md:justify-center md:gap-5 md:py-5">
            <div>
                <img class="w-[100px] object-cover md:w-[200px]" src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-The-Gioi-Di-Dong-MWG-Y-V.png" alt="">
            </div>
            <ul id="menu" class="invisible flex flex-col z-20 fixed items-center justify-center w-full h-screen bg-gray-500 top-0 left-0 gap-4 md:w-auto md:h-auto md:visible md:bg-white md:justify-between md:static md:flex-row lg:gap-8">
                <?php foreach($menuList as $v):?>
                    <li><a class="text-[12px] font-bold uppercase leading-[14px] hover:text-orange-600 lg:text-[20px] lg:leading-[23px]" href="#"><?php echo $v?></a></li>
                <?php endforeach?>
            </ul>
            <div id="menu-btn" class="z-20 md:hidden">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <!-- banner1 -->
        <div class="px-4 md:px-5">
            <img class="w-full object-cover" src="https://cdn.tgdd.vn/Files/2015/12/03/751514/tgdd-online-friday-800-300-1.jpg" alt="">
        </div>
        <!-- main -->
        <div class="my-8 px-4 md:px-5 md:mt-10 md:mb-[118px] lg:px-4 lg:my-[64px]">
            <!-- title -->
            <div class="flex flex-col items-center gap-2 md:gap-3 lg:gap-4">
                <a href="#">
                    <h2 class="text-[24px] font-bold leading-[28px] md:text-[32px] md:leading-[37px] lg:text-[48px] lg:leading-[56px]">SẢN PHẨM</h2>
                </a>
            </div>
            <!-- content -->
            <div class="mt-5 mb-8 grid grid-cols-1 gap-5 md:my-8 md:grid-cols-2 md:gap-x-[22px] md:gap-y-8 lg:mt-8 lg:mb-[64px] lg:grid-cols-3 lg:gap-8">
                <?php foreach($products as $item):?>
                    <div>
                    <a class="flex justify-center" href="#">
                        <img class="w-[50%] md:w-[80%] object-cover" src="<?php echo $item['image']?>" alt="">
                    </a>
                    <div>
                        <a class="flex justify-center" href="#">
                            <h3 class="text-[14px] font-bold leading-[16px] mt-[15px] mb-2 md:text-[16px] md:leading-[18px] md:mt-5 md:mb-2 lg:text-[20px] lg:leading-[23px] lg:mb-3"><?php echo $item['name']?></h3>
                        </a>
                        <p class="text-center text-[#848484] text-[12px] font-[400] leading-[18px] md:text-[14px] md:leading-[20px] lg:text-[20px] lg:leading-[30px]"><?php echo $item['price']?><span>$</span></p>
                    </div>
                </div>
                <?php endforeach?>    
            </div>
        </div>
        <!-- footer -->
        <div class="bg-black flex items-center justify-between px-4 py-8 mx-4 md:px-5 md:mx-5 lg:mx-0 lg:px-4 lg:py-6">
            <div>
                <img class="w-[50px] md:w-[80px]" src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-The-Gioi-Di-Dong-MWG.png" alt="">
            </div>
            <form id="form" action="">
                <input id="email" class="border-2 border-[#FFB800] text-white bg-black pl-2 w-[120px] h-[30px] placeholder:text-white placeholder:text-[12px] placeholder:font-bold placeholder:leading-[14px] outline-none md:pl-3 md:w-[250px] md:h-[40px] md:placeholder:text-[14px] md:placeholder:leading-[16px] lg:pl-5 lg:placeholder:text-[20px] lg:placeholder:leading-[23px] lg:w-[350px] lg:h-[50px]" type="text" placeholder="Email">
                <button class="border-none ml-2 bg-[#FFB800] text-white text-[12px] font-bold leading-[14px] w-[60px] h-[30px] ml-3 md:text-[14px] md:leading-[16px] md:h-[40px] md:w-[100px] lg:ml-5 lg:text-[20px] lg:leading-[23px] lg:w-[120px] lg:h-[50px]" type="submit">Send</button>
            </form>
        </div>
    </div>

    <script src="./main.js"></script>
</body>
</html>