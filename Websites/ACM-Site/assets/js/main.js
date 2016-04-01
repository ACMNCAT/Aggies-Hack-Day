$('nav a').on('click', function(e) {
	// prevent default anchor click behavior
	e.preventDefault();

	// store hash
	var hash = this.hash;

	if ($(hash).length) {
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 500, function() {
			// Do something fun if you want!
		});
	}
});

$('#home a').on('click', function(e) {
	// prevent default anchor click behavior
	e.preventDefault();

	// store hash
	var hash = this.hash;

	if ($(hash).length) {
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 500, function() {
			// Do something fun if you want!
		});
	}
});
$('#about q a').on('click', function(e) {
	// prevent default anchor click behavior
		e.preventDefault();


		// store hash
		var hash = this.hash;

		if ($(hash).length) {
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 500, function () {
				// Do something fun if you want!
			});
		}

});

(function($) {

	skel.breakpoints({
		wide: '(max-width: 1680px)',
		normal: '(max-width: 1280px)',
		narrow: '(max-width: 980px)',
		narrower: '(max-width: 840px)',
		mobile: '(max-width: 736px)',
		mobilep: '(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$header = $('#header'),
			$banner = $('#home');

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on narrower.
			skel.on('+narrower -narrower', function() {
				$.prioritize(
					'.important\\28 narrower\\29',
					skel.breakpoint('narrower').active
				);
			});

		// Dropdowns.
			$('#nav > ul').dropotron({
				alignment: 'right'
			});

		// Off-Canvas Navigation.

			// Navigation Button.
				$(
					'<div id="navButton">' +
						'<a href="#navPanel" class="toggle"></a>' +
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel">' +
						'<nav>' +
							$('#nav').navList() +
						'</nav>' +
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#navButton, #navPanel, #page-wrapper')
						.css('transition', 'none');

		// Header.
		// If the header is using "alt" styling and #home is present, use scrollwatch
		// to revert it back to normal styling once the user scrolls past the banner.
		// Note: This is disabled on mobile devices.
			if (!skel.vars.mobile
			&&	$header.hasClass('alt')
			&&	$banner.length > 0) {

				$window.on('load', function() {

					$banner.scrollwatch({
						delay:		0,
						range:		0.5,
						anchor:		'top',
						on:			function() { $header.addClass('alt reveal'); },
						off:		function() { $header.removeClass('alt'); }
					});

				});

			}

	});

	$(document).ready(function() {
		$("#submit").click(function() {
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			var number = $("#number").val();
			$("#returnmessage").empty(); // To empty previous error/success message.
				// Checking for blank fields.
			if (name == '' || email == '' || number == '') {
				alert("Please Fill Required Fields");
			} else {
				// Returns successful data submission message when the entered information is stored in database.
				$.post("contact_form.php", {
					name1: name,
					email1: email,
					message1: message,
					number1: number
				}, function(data) {
					$("#returnmessage").append(data); // Append returned message to message paragraph.
					if (data == "Your Query has been received, We will contact you soon.") {
						$("#form")[0].reset(); // To reset form fields on success.
					}
				});
			}
		});
	});

})(jQuery);