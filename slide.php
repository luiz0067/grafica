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

</style>
</head>

<body>
<div id="makeMeScrollable">
		<img src="slide/fotoslide/1.jpg" width="1100" height="400" border="0"  id="field" />
		<img src="slide/fotoslide/2.jpg" width="1100" height="400" border="0"  id="field" />
        <img src="slide/fotoslide/3.jpg"width="1100" height="400" border="0"    id="field" />
	</div>
</body>
</html>