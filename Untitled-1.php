<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style type="text/css">
#makeMeScrollable div.scrollableArea *
{
	position: relative;
	display: block;
	float: left;
	padding: 0;
	margin: 0;
}
</style>
</head>

<body>

<script type="text/javascript">
	$(document).ready(function() {
		$("#makeMeScrollable").smoothDivScroll({ 
			mousewheelScrolling: true,
			manualContinuousScrolling: true,
			visibleHotSpotBackgrounds: "always",
			autoScrollingMode: "onstart"
		});
	});
</script>

<div id="makeMeScrollable">
		<img src="images/demo/field.jpg" alt="Demo image" id="field" />
		<img src="images/demo/gnome.jpg" alt="Demo image" id="gnome" />
		<img src="images/demo/pencils.jpg" alt="Demo image" id="pencils" />
		<img src="images/demo/golf.jpg" alt="Demo image" id="golf" />
		<img src="images/demo/river.jpg" alt="Demo image" id="river" />
		<img src="images/demo/train.jpg" alt="Demo image" id="train" />
		<img src="images/demo/leaf.jpg" alt="Demo image" id="leaf" />
		<img src="images/demo/dog.jpg" alt="Demo image" id="dog" />
	</div>


</body>
</html>