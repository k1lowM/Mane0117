<html>
<head>
<script src="https://d3js.org/d3.v5.min.js"></script>

</head>


<body>


<?php
/*
（１）とみ田:5,5
（２）無心:5,3
（３）六厘舎:3,5
（４）前田慶次朗:3,4
（５）神仙:1,1
（６）縁道:5,1
（７）違う家:3,1
（８）ドリルマン:1,3
*/

    $ramen_data = '';

        $_POST['とみ田'] = 1;
        $_POST['ドリルマン'] = 1;

    if(isset($_POST['とみ田'])){
        $ramen_data .= '[5,5],';
    }
    if(isset($_POST['無心'])){
        $ramen_data .= '[5,3],';
    }
    if(isset($_POST['六厘舎'])){
        $ramen_data .= '[3,5],';
    }
    if(isset($_POST['前田慶次朗'])){
        $ramen_data .= '[3,4],';
    }
    if(isset($_POST['神仙'])){
        $ramen_data .= '[1,1],';
    }
    if(isset($_POST['縁道'])){
        $ramen_data .= '[5,1],';
    }
    if(isset($_POST['違う家'])){
        $ramen_data .= '[3,1],';
    }
    if(isset($_POST['ドリルマン'])){
        $ramen_data .= '[1,3],';
    }


?>
	<h1>結果ページ</h1>

<div id="result"></div>
<script type="text/javascript">
// 1. データの準備
var dataset = [
<?php echo $ramen_data; ?>
];
var width = 300; // グラフの幅
var height = 300; // グラフの高さ
var margin = { "top": 30, "bottom": 60, "right": 30, "left": 60 };
// 2. SVG領域の設定
var svg = d3.select("body").append("svg").attr("width", width).attr("height", height);
// 3. 軸スケールの設定
var xScale = d3.scaleLinear()
.domain([1, 5])
.range([margin.left, width - margin.right]);
var yScale = d3.scaleLinear()
.domain([1, 5])
.range([height - margin.bottom, margin.top]);
// 4. 軸の表示
var axisx = d3.axisBottom(xScale).ticks(5);
var axisy = d3.axisLeft(yScale).ticks(5);
svg.append("g")
.attr("transform", "translate(" + 0 + "," + (height - margin.bottom) + ")")
.call(axisx)
.append("text")
.attr("fill", "black")
.attr("x", (width - margin.left - margin.right) / 2 + margin.left)
.attr("y", 35)
.attr("text-anchor", "middle")
.attr("font-size", "10pt")
.attr("font-weight", "bold")
.text("こってり");
svg.append("g")
.attr("transform", "translate(" + margin.left + "," + 0 + ")")
.call(axisy)
.append("text")
.attr("fill", "black")
.attr("x", -(height - margin.top - margin.bottom) / 2 - margin.top)
.attr("y", -35)
.attr("transform", "rotate(-90)")
.attr("text-anchor", "middle")
.attr("font-weight", "bold")
.attr("font-size", "10pt")
.text("太麵");
// 5. プロットの表示
svg.append("g")
.selectAll("circle")
.data(dataset)
.enter()
.append("circle")
.attr("cx", function(d) { return xScale(d[0]); })
.attr("cy", function(d) { return yScale(d[1]); })
.attr("fill", "steelblue")
.attr("r", 4);
</script>

	ここに結果</div>



<a href="main.php">戻る</a>

</body>
</html>


