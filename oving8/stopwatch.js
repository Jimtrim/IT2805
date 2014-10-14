/**
 * Created by jimtrim on 14/10/14.
 */


var StopWatch = {
	updateClock: function (startTime) {
		var outTime = new Date().getTime() - startTime;
		document.getElementById("display-area").textContent = outTime;
	}
}
addEventListener("load", function() {
	var now = new Date().getTime();
	StopWatch.updateClock(now - 36000);
});
