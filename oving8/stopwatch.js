/**
 * Created by jimtrim on 14/10/14.
 */


var StopWatch = {
	running: false,
	startTime: null,
	intervalId: null,
	savedTime: 0,


	toggleTimer: function () {
		console.log("toggleTimer called");
		if (StopWatch.running) { // STOP IT
			StopWatch.running = false;
			console.log("stopping");
			clearInterval( StopWatch.intervalId );
		} else { //START IT
			StopWatch.running = true;

			console.log("starting");
			if (StopWatch.savedTime) {
				console.log("Saved ");
				StopWatch.startTime = new Date().getTime() - StopWatch.savedTime;
			}
			StopWatch.intervalId = window.setInterval(StopWatch.updateClock, 5);
		}
	},

	resetTimer: function() {
		console.log("reset timer");
		StopWatch.startTime = null;
		StopWatch.savedTime = 0;
		document.getElementById("display-area").textContent = StopWatch.timestampToString(0);
	},

	updateClock: function () {
		var now = new Date().getTime();


		if (! StopWatch.startTime)
			StopWatch.startTime = now;



		document.getElementById("display-area").textContent = StopWatch.timestampToString(now - StopWatch.startTime);
		StopWatch.savedTime = now - StopWatch.startTime;
		console.log ("time: " + StopWatch.savedTime);
	},

	timestampToString: function (stamp) {
		var base = parseInt(stamp, 10);

		var mili = base % 1000;
		var sec = Math.floor(base / 1000) % 3600;
		var min = Math.floor(base / (3600 * 1000)) % 3600;
		var hour = Math.floor(base / (3600 * 3600 * 1000)) % 3600;


		if (hour   < 10) {hour   = "0"+hour;}
		if (min < 10) {min = "0"+min;}
		if (sec < 10) {sec = "0"+sec;}
		if (mili < 10) {mili = "00"+ mili;}
		else if (mili < 100) {mili = "0"+ mili;}

		var time    = hour+':'+min+':'+sec+':'+mili;
		return time;
	}

};


addEventListener("load", function() {
	document.getElementById("toggle-button").addEventListener("click", StopWatch.toggleTimer);
	document.getElementById("reset-button").addEventListener("click", StopWatch.resetTimer);
	//document.getElementById("toggle-button").addEventListener("click", function() {
	//	var now = new Date().getTime();
	//	StopWatch.updateClock(now - 36000);
	//});
});
