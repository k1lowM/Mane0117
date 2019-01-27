<html>
<head>
	<link rel="stylesheet" href="./style.css" />
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=https://stitches.hyperyolo.com/public/stitches.css rel="stylesheet">
    <link href=https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800,900 rel="stylesheet">
    <link rel="stylesheet" href=https://use.fontawesome.com/releases/v5.6.3/css/all.css integrity=sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/ crossorigin="anonymous">
    <title>Stitches</title>
</head>

 <body><section class="my-8 font-sans container m-auto max-w-xl ">
	<h1>メニューページ</h1>

<!-- ここにアンケート -->
    <div id="main">
      <ul class="image_list">
        <li>
          <div class="image_box">
<img class="thumbnail" src="./img/とみ田.jpg" alt="とみ田" />
            <input class="disabled_checkbox" type="checkbox" name="とみ田" value="1"  checked />
 
		  </div>
          <div class="image_box">
<img class="thumbnail" src="./img/ドリルマン.jpg" alt="ドリルマン" />
            <input class="disabled_checkbox" type="checkbox" name="ドリルマン" value="1"  checked />
          </div>
          <div class="image_box">
<img class="thumbnail" src="./img/違う家.jpg" alt="違う家" />
            <input class="disabled_checkbox" type="checkbox" name="違う家" value="1"  checked />
          </div>
          <div class="image_box">
<img class="thumbnail" src="./img/縁道.jpg" alt="縁道" />
            <input class="disabled_checkbox" type="checkbox" name="縁道" value="1"  checked />
          </div>
          <div class="image_box">
<img class="thumbnail" src="./img/極.jpg" alt="極" />
            <input class="disabled_checkbox" type="checkbox" name="極" value="1"  checked />
          </div>
          <div class="image_box">
<img class="thumbnail" src="./img/前田慶次朗.jpg" alt="前田慶次朗" />
            <input class="disabled_checkbox" type="checkbox" name="前田慶次朗" value="1"  checked />
          </div>
          <div class="image_box">
<img class="thumbnail" src="./img/博多だるま.jpg" alt="博多だるま" />
            <input class="disabled_checkbox" type="checkbox" name="博多だるま" value="1"  checked />
          </div>
          <div class="image_box">
<img class="thumbnail" src="./img/無心.jpg" alt="無心" />
            <input class="disabled_checkbox" type="checkbox" name="無心" value="1" checked />
          </div>
           <div class="image_box">
<img class="thumbnail" src="./img/六厘舎.jpg" alt="六厘舎" />
            <input class="disabled_checkbox" type="checkbox" name="六厘舎" value="1"  checked />
          </div>
       </li>
      </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./base.js"></script>

	<form method="POST" action="result.php">
	<input type="submit" value="アンケート回答" />
	</form>

</section></body>
</html>
