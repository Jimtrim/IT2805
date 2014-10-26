/**
 * Created by jimtrim on 26/10/14.
 */

var sortByColumn = function (event) {
	var tbody = document.getElementById("the-table-body"); // element to be sorted
	var rows = tbody.rows; //abstraction

	var arr = []; // sortable data structure
	for (var i = 0; i<rows.length; i++) {
		var cells = rows[i].cells; // abstraction
		arr[i] = []; // prepare an array to store values
		for(j = 0; j < cells.length; j++){
			arr[i][j] = cells[j].innerHTML; // get current content of the cell, and put it into the sortable array
		}
	}
	// console.log(arr); // for testing if the array is populated properly

	var column = parseInt(event.srcElement.value); // get column from the event
	arr.sort(function(a, b){
		return (a[column] == b[column]) ? 0 : ((a[column] > b[column]) ? 1 : -1 );
	});

	for(i = 0; i < rows.length; i++){
		arr[i] = "<td>"+arr[i].join("</td><td>")+"</td>"; // build data-elements for the data
	}
	tbody.innerHTML = "<tr>"+arr.join("</tr><tr>")+"</tr>"; // put those data-elements into row-elements
};


addEventListener("load", function() {
	document.getElementById("sort-button-1").addEventListener("click", sortByColumn);
	document.getElementById("sort-button-2").addEventListener("click", sortByColumn);
	document.getElementById("sort-button-3").addEventListener("click", sortByColumn);
});