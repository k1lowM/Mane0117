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
//var_dump($_POST);
    $ramen_data = '';

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
<?php
$text = '健三が遠い所から帰って来て駒込の奥に世帯を持ったのは東京を出てから何年目になるだろう。彼は故郷の土を踏む珍らしさのうちに一種の淋し味さえ感じた。
彼の身体には新らしく後に見捨てた遠い国の臭がまだ付着していた。彼はそれを忌んだ。一日も早くその臭を振い落さなければならないと思った。そうしてその臭のうちに潜んでいる彼の誇りと満足にはかえって気が付かなかった。
彼はこうした気分を有った人にありがちな落付のない態度で、千駄木から追分へ出る通りを日に二返ずつ規則のように往来した。
ある日小雨が降った。その時彼は外套も雨具も着けずに、ただ傘を差しただけで、何時もの通りを本郷の方へ例刻に歩いて行った。すると車屋の少しさきで思い懸けない人にはたりと出会った。その人は根津権現の裏門の坂を上って、彼と反対に北へ向いて歩いて来たものと見えて、健三が行手を何気なく眺めた時、十間位先から既に彼の視線に入ったのである。そうして思わず彼の眼をわきへ外させたのである。
彼は知らん顔をしてその人の傍を通り抜けようとした。けれども彼にはもう一遍この男の眼鼻立を確かめる必要があった。それで御互が二、三間の距離に近づいた頃また眸をその人の方角に向けた。すると先方ではもう疾くに彼の姿を凝と見詰めていた。
往来は静であった。二人の間にはただ細い雨の糸が絶間なく落ちているだけなので、御互が御互の顔を認めるには何の困難もなかった。健三はすぐ眼をそらしてまた真正面を向いたまま歩き出した。けれども相手は道端に立ち留まったなり、少しも足を運ぶ気色なく、じっと彼の通り過ぎるのを見送っていた。健三はその男の顔が彼の歩調につれて、少しずつ動いて回るのに気が着いた位であった。
彼はこの男に何年会わなかったろう。彼がこの男と縁を切ったのは、彼がまだ廿歳になるかならない昔の事であった。それから今日までに十五、六年の月日が経っているが、その間彼らはついぞ一度も顔を合せた事がなかったのである。
彼の位地も境遇もその時分から見るとまるで変っていた。黒い髭を生して山高帽を被った今の姿と坊主頭の昔の面影とを比べて見ると、自分でさえ隔世の感が起らないとも限らなかった。しかしそれにしては相手の方があまりに変らな過ぎた。彼はどう勘定しても六十五、六であるべきはずのその人の髪の毛が、何故今でも元の通り黒いのだろうと思って、心のうちで怪しんだ。帽子なしで外出する昔ながらの癖を今でも押通しているその人の特色も、彼には異な気分を与える媒介となった。
彼は固よりその人に出会う事を好まなかった。万一出会ってもその人が自分より立派な服装でもしていてくれれば好いと思っていた。しかし今目前見たその人は、あまり裕福な境遇にいるとは誰が見ても決して思えなかった。帽子を被らないのは当人の自由としても、羽織なり着物なりについて判断したところ、どうしても中流以下の活計を営んでいる町家の年寄としか受取れなかった。彼はその人の差していた洋傘が、重そうな毛繻子であった事にまで気が付いていた。
その日彼は家へ帰っても途中で会った男の事を忘れ得なかった。折々は道端へ立ち止まって凝と彼を見送っていたその人の眼付に悩まされた。しかし細君には何にも打ち明けなかった。機嫌のよくない時は、いくら話したい事があっても、細君に話さないのが彼の癖であった。細君も黙っている夫に対しては、用事の外決して口を利かない女であった。';
$api_response = watson_personality_insights($text);

function watson_personality_insights($text) {
    $user_name  = 'apikey'; //IBM Bluemix?A?a“?
    $password   = 'onZ_M3_VJBG45gdOkq719c0yoZqGKQy61wzKldz0-8c4'; //IBM Bluemix?A?a“?
    $api_url    = 'https://gateway-tok.watsonplatform.net/personality-insights/api/v3/profile?version=2017-10-13&consumption_preferences=true&raw_scores=true';

    $postdata = array(
        'contentItems' => array(
            array(
                'content'       => $text,
                'contenttype'   => 'text/plain',
                'language'      => 'ja'
            )
        )
    );

    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $user_name.':'.$password);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8','Content-Language: ja','Accept-Language: ja', 'Accept:application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
    $response= curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);;
}
$a_name=$api_response['personality'][0]['name'];
$b_name=$api_response['personality'][1]['name'];
$c_name=$api_response['personality'][2]['name'];
$d_name=$api_response['personality'][3]['name'];
$e_name=$api_response['personality'][4]['name'];

$a_percentile=$api_response['personality'][0]['percentile'];
$b_percentile=$api_response['personality'][1]['percentile'];
$c_percentile=$api_response['personality'][2]['percentile'];
$d_percentile=$api_response['personality'][3]['percentile'];
$e_percentile=$api_response['personality'][4]['percentile'];

?>

<h1>分析結果</h1>

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

<div style="width: 40%; margin: 0 auto;">
    <canvas id="radar-chart" height="700" width="700"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>

    var radarChartData = {
        labels: [
            "<?php echo $a_name; ?>", //各々の方法でPHPの変数を代入してください
            "<?php echo $b_name; ?>",
            "<?php echo $c_name; ?>",
            "<?php echo $d_name; ?>",
            "<?php echo $e_name; ?>"
        ],
        datasets: [
            {
                label: "性格",
                fillColor : "rgba(50,50,50,0.8)",
                strokeColor : "rgba(50,50,50,0.8)",
                pointColor : "rgba(0,0,0,1)",
                data : [
                    "<?php echo $a_percentile; ?>", //各々の方法でPHPの変数を代入してください
                    "<?php echo $b_percentile; ?>",
                    "<?php echo $c_percentile; ?>",
                    "<?php echo $d_percentile; ?>",
                    "<?php echo $e_percentile; ?>"
                ]
            }//
        ]
    };
    window.onload = function(){
        window.myRadar = new Chart(document.getElementById("radar-chart").getContext("2d")).Radar(radarChartData, {
            responsive: true
        });
    }
</script>

<p>
<a href="main.php">戻る</a>
</p>
</body>
</html>


