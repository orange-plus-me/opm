<!-- SP canvas -->
<script type="text/javascript">
	window.addEventListener('load',function(){
	var spcanvas = document.getElementById('sp-wave');
	var spwavebox = document.getElementById("sp-wave-box");
	var spwait = 10;

	setCanvasSize();

	function setCanvasSize() {
		spcanvas.width = spwavebox.offsetWidth;
		spcanvas.height = spwavebox.offsetHeight;
	}

	var ctx = spcanvas.getContext('2d');
	ctx.fillStyle = 'rgb(75,165,255)';

	ctx.beginPath();
	ctx.moveTo(0,50);
	ctx.bezierCurveTo(80,120,160,-20,240,50);
	ctx.bezierCurveTo(360,120,400,-20,480,50);
	ctx.lineTo(480,100);
	ctx.lineTo(0,100);
	ctx.fill();			

	window.addEventListener('resize', function(){
		setTimeout(function(){
			setCanvasSize();

			ctx.fillStyle = 'rgb(75,165,255)';
			ctx.clearRect(0,0,1920,0);
			ctx.beginPath();
			ctx.moveTo(0,50);
			ctx.bezierCurveTo(80,120,160,-20,240,50);
			ctx.bezierCurveTo(360,120,400,-20,480,50);
			ctx.lineTo(480,100);
			ctx.lineTo(0,100);
			ctx.fill();	
		},spwait);
	});
	});
</script>
<!-- /sp canvas -->

<!-- PC TB canvas -->
<script type="text/javascript">
	window.addEventListener('load',function(){
	var canvas = document.getElementById('pctb-wave');
	var wavebox = document.getElementById("pctb-wave-box");
	var wait = 10;

	setCanvasSize();

	function setCanvasSize() {
		canvas.width = wavebox.offsetWidth;
		canvas.height = wavebox.offsetHeight;
	}

	var ctx = canvas.getContext('2d');
	ctx.fillStyle = 'rgb(75,165,255)';

	ctx.beginPath();
	ctx.moveTo(0,100);
	ctx.bezierCurveTo(160,250,320,-50,480,100);
	ctx.bezierCurveTo(640,250,800,-50,960,100);
	ctx.bezierCurveTo(1120,250,1280,-50,1440,100);
	ctx.bezierCurveTo(1600,250,1760,-50,1920,100);
	ctx.lineTo(1920,200);
	ctx.lineTo(0,200);
	ctx.fill();			

	window.addEventListener('resize', function(){
		setTimeout(function(){
			setCanvasSize();

			ctx.fillStyle = 'rgb(75,165,255)';
			ctx.clearRect(0,0,1920,0);
			ctx.beginPath();
			ctx.moveTo(0,100);
			ctx.bezierCurveTo(160,250,320,-50,480,100);
			ctx.bezierCurveTo(640,250,800,-50,960,100);
			ctx.bezierCurveTo(1120,250,1280,-50,1440,100);
			ctx.bezierCurveTo(1600,250,1760,-50,1920,100);
			ctx.lineTo(1920,200);
			ctx.lineTo(0,200);
			ctx.fill();	
		},wait);		});
	});
</script>
<!-- /pc tb canvas -->