// document.getElementbyId('show-more').onclick = showPhotos;

// function showPhotos(event) {
// 	event.preventDefault();

// 	document.getElementById('more-photos').style.display = "block";
// }

//Defining a function and calling it from document.ready
// var onDocumentReadyFunc = function() {
// 	console.log('The page has been loaded');
// } ;

// $(document).ready(function() {
// 	onDocumentReadyFunc();
// });

$(document).ready(function() {

	//show more photos
	$('#show-more').click(function(event) {

		//stop click event
		event.preventDefault();

		//hide link
		$('#show-more').hide();

		//show more photos
		$('#more-photos').slideDown();
			
	});
			
});
