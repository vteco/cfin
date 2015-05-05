/*
* Author:      Marco Kuiper (http://www.marcofolio.net/)
*/

// Speed of the automatic slideshow
var slideshowSpeed = 8000;

// Variable to store the images we need to set as background
// which also includes some text and url's.
var photos = [ {
		"title" : "Sebastien P.",
		"image" : "banner1.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner1.jpg",
		"firstline" : "« Le premier déblocage du prêt a eu lieu cette semaine, les travaux sont partis ! ",
		"secondline" : "Merci de vos précieux conseils et des nombreuses simulations, ",
		"thirdline" : "et propositions que vous m’avez fait pour l’attribution de mon prêt»"
	}, {
		"title" : "Raymond D.",
		"image" : "banner2.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner2.jpg",
		"firstline" : "«Permettez-nous de vous remercier pour la rapidité avec laquelle votre  ",
		"secondline" : "offre nous est parvenue.  Elle est le gage d’une volonté d’arriver à une ",
		"thirdline" : "proposition qui réponde vraiment à nos besoins.»  "
	}, {
		"title" : "Batoul C.",
		"image" : "banner3.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner3.jpg",
		"firstline" : "«Merci de nous avoir reçu en plein pendant votre weekend, et merci",
		"secondline" : "de nous avoir expliqué clairement les solutions de financement pour notre",
		"thirdline" : "futur appartement.» "
	}, {
		"title" : "Shirley T.",
		"image" : "banner4.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner4.jpg",
		"firstline" : "&quot;If you need to get a mortgage or equity release I can thoroughly recommend",
		"secondline" : "Carte Financement in Paris. They are EXCELLENT.They handled an equity ",
		"thirdline" : "release for me, and I had the money in 2 weeks!"
	}, {
		"title" : "Stephan C.",
		"image" : "banner5.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner5.jpg",
		"firstline" : "« J’ai signé chez le notaire hier. Je tenais à vous remercier pour votre ",
		"secondline" : "professionnalisme et votre réactivité tout au long du ",
		"thirdline" : " montage du crédit. Bonne continuation.» "
	}, {
		"title" : "Mélanie C. ",
		"image" : "banner6.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner6.jpg",
		"firstline" : "«  Le rendez-vous avec notre nouveau banquier s’est très",
		"secondline" : "bien passé et les conditions que vous aviez négociées ont été appliquées. ",
		"thirdline" : " Encore merci. »  "
	}, {
		"title" : "Anthony L.",
		"image" : "banner7.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner7.jpg",
		"firstline" : "« Chez vous, la personne qui répond au téléphone est celle qui gère le dossier.",
		"secondline" : "Ça change de ces centres d’appel qui ne sont au courant de rien. ",
		"thirdline" : " Surtout, continuez comme ça. »"
	}, {
		"title" : "Frédérique P.",
		"image" : "banner8.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner8.jpg",
		"firstline" : "«15 jours pour obtenir un prêt à 3,1% ",
		"secondline" : "alors qu’après un mois de discussion avec ma banque, j’en étais à 3,4%.",
		"thirdline" : " Merci !.»"
	}, {
		"title" : "Bertrand R.",
		"image" : "banner9.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner9.jpg",
		"firstline" : "«L’idée de changer de banque m’ennuyait et vous êtes parvenu à obtenir d’elle",
		"secondline" : "un taux que mon conseiller ne m’aurait jamais accordé. Je vous ",
		"thirdline" : "recommanderai sincèrement.»"
	}, {
		"title" : "Chloé S.",
		"image" : "banner10.jpg",
		"url" : "http://www.cartefinancement.fr/images/banner10.jpg",
		"firstline" : "« Je voulais vous remercier pour votre accompagnement et",
		"secondline" : "votre grande disponibilité . A bientôt pour mon prochain investissement. ",
		"thirdline" : "Chloé »"
	}
];



$(document).ready(function() {
		
	// Backwards navigation
	$("#back").click(function() {
		stopAnimation();
		navigate("back");
	});
	
	// Forward navigation
	$("#next").click(function() {
		stopAnimation();
		navigate("next");
	});
	
	var interval;
	$("#control").toggle(function(){
		stopAnimation();
	}, function() {
		// Change the background image to "pause"
		$(this).css({ "background-image" : "url(images/btn_pause.png)" });
		
		// Show the next image
		navigate("next");
		
		// Start playing the animation
		interval = setInterval(function() {
			navigate("next");
		}, slideshowSpeed);
	});
	
	
	var activeContainer = 1;	
	var currentImg = 0;
	var animating = false;
	var navigate = function(direction) {
		// Check if no animation is running. If it is, prevent the action
		if(animating) {
			return;
		}
		
		// Check which current image we need to show
		if(direction == "next") {
			currentImg++;
			if(currentImg == photos.length + 1) {
				currentImg = 1;
			}
		} else {
			currentImg--;
			if(currentImg == 0) {
				currentImg = photos.length;
			}
		}
		
		// Check which container we need to use
		var currentContainer = activeContainer;
		if(activeContainer == 1) {
			activeContainer = 2;
		} else {
			activeContainer = 1;
		}
		
		showImage(photos[currentImg - 1], currentContainer, activeContainer);
		
	};
	
	var currentZindex = -1;
	var showImage = function(photoObject, currentContainer, activeContainer) {
		animating = true;
		
		// Make sure the new container is always on the background
		currentZindex--;
		
		// Set the background image of the new active container
		$("#headerimg" + activeContainer).css({
			"background-image" : "url(images/" + photoObject.image + ")",
			"display" : "block",
			"z-index" : currentZindex
		});
		
		// Hide the header text
		$("#headertxt").css({"display" : "none"});
		
		// Set the new header text
		$("#firstline").html(photoObject.firstline);
		$("#secondline")
			//.attr("href", photoObject.url)
			.html(photoObject.secondline);
		$("#thirdline").html(photoObject.thirdline);	
		$("#pictureduri")
			//.attr("href", photoObject.url)
			.html(photoObject.title);

		
		
		// Fade out the current container
		// and display the header text when animation is complete
		$("#headerimg" + currentContainer).fadeOut(function() {
			setTimeout(function() {
				$("#headertxt").css({"display" : "block"});
				animating = false;
			}, 500);
		});
	};
	
	var stopAnimation = function() {
		// Change the background image to "play"
		$("#control").css({ "background-image" : "url(images/btn_play.png)" });
		
		// Clear the interval
		clearInterval(interval);
	};
	
	// We should statically set the first image
	navigate("next");
	
	// Start playing the animation
	interval = setInterval(function() {
		navigate("next");
	}, slideshowSpeed);
	
});