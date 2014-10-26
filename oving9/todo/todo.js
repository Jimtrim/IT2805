/**
 * Created by jimtrim on 26/10/14.
 */

var Todo = Todo || {};
Todo.addTask = function () {
	var taskText = document.getElementById("add-task-text" ).value;
	document.getElementById("add-task-text" ).value = "";
	console.log(taskText);

	document.getElementById("todo-list" ).appendChild(Todo.buildListElement(taskText));
};

Todo.buildListElement = function (text) {
	var li = document.createElement("li");
	li.innerHTML = '<label><input type="checkbox" name="task-done">' + text + '</label>';
	return li;
};

Todo.clearCompletedElements = function() {

};

addEventListener("load", function() {
	document.getElementById("add-task-button").addEventListener("click", Todo.addTask);
	document.getElementById("clear-completed-button").addEventListener("click", Todo.addTask);
});
