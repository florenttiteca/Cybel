$(document).ready(function(){

	/* parfumerie */
	$('#carrousel').caroufredsel({
		direction: "up",
		items: 6,
		width: 250,
		auto: {
			play: true,
			items: 1,
			duration: 1500,
			timeoutDuration: 2000
		},
	});

	/* accessoires */
	$('#carrousel2').caroufredsel({
		direction: "up",
		items: 4,
		width: 250,
		auto: {
			play: true,
			items: 1,
			duration: 1500,
			timeoutDuration: 2000,
		},
	});


	$('#carrousel3').caroufredsel({
		direction: "up",
		items: 6,
		width: 250,
		auto: {
			play: true,
			items: 1,
			duration: 1500,
			timeoutDuration: 2000
		},
	});

	/* soins corps*/
	/* epilations*/
	/* visages*/
	/* soins page generale */
	/* maquillage */
	/* prothesie */
	/* lipo */
	/* uv */
	$('#carrousel_soins').caroufredsel({
		direction: "up",
		items: 4,
		width: 250,
		auto: {
			play: true,
			items: 1,
			duration: 1500,
			timeoutDuration: 2000
		},
	});
});