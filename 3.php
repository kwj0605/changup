<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="imgstyle.css">
</head>
<body>
	<h1>추천 경로</h1>
	<p>영암 월출산 조각공원 -> 카페 피크니처 -> 어바우코다리찜</p>
	<div class="im">
		<img src="img/3.1.jpg" alt="">
		<img src="img/3.2.jpg" alt="">
		<img src="img/3.3.jpg" alt="">
	</div>
    <p>지도</p>
    <div class="map">
		<img src="img/3.png" alt="">
	</div>
	<p>별점</p>
	<div class="starpoint_wrap">
		<div class="starpoint_box">
			<label for="starpoint_1" class="label_star" title="0.5"><span class="blind">0.5점</span></label>
			<label for="starpoint_2" class="label_star" title="1"><span class="blind">1점</span></label>
			<label for="starpoint_3" class="label_star" title="1.5"><span class="blind">1.5점</span></label>
			<label for="starpoint_4" class="label_star" title="2"><span class="blind">2점</span></label>
			<label for="starpoint_5" class="label_star" title="2.5"><span class="blind">2.5점</span></label>
			<label for="starpoint_6" class="label_star" title="3"><span class="blind">3점</span></label>
			<label for="starpoint_7" class="label_star" title="3.5"><span class="blind">3.5점</span></label>
			<label for="starpoint_8" class="label_star" title="4"><span class="blind">4점</span></label>
			<label for="starpoint_9" class="label_star" title="4.5"><span class="blind">4.5점</span></label>
			<label for="starpoint_10" class="label_star" title="5"><span class="blind">5점</span></label>
			<input type="radio" name="starpoint" id="starpoint_1" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_2" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_3" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_4" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_5" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_6" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_7" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_8" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_9" class="star_radio">
			<input type="radio" name="starpoint" id="starpoint_10" class="star_radio">
			<span class="starpoint_bg"></span>
		</div>
	</div>
	<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://httplocalhost30001php.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>
</html>