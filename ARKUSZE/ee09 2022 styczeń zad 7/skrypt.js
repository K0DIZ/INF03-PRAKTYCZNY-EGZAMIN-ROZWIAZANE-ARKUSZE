function zamienZdjecie1 () {
	let glowny = document.getElementById('glowny-zdj');
	let zdjecie = document.getElementsByClassName('zdj');
	glowny.src = zdjecie[0].src;
}
function zamienZdjecie2 () {
	let glowny = document.getElementById('glowny-zdj');
	let zdjecie = document.getElementsByClassName('zdj');
	glowny.src = zdjecie[1].src;
}
function zamienZdjecie3 () {
	let glowny = document.getElementById('glowny-zdj');
	let zdjecie = document.getElementsByClassName('zdj');
	glowny.src = zdjecie[2].src;
}
function zamienZdjecie4 () {
	let glowny = document.getElementById('glowny-zdj');
	let zdjecie = document.getElementsByClassName('zdj');
	glowny.src = zdjecie[3].src;
}
function zamienZdjecie5 () {
	let glowny = document.getElementById('glowny-zdj');
	let zdjecie = document.getElementsByClassName('zdj');
	glowny.src = zdjecie[4].src;
}

function zamienIkone () {
	let img = document.getElementById('icon');
	let current = document.getElementById('icon').src;
	if (current.search('icon-off.png') != -1) {
		img.src = 'icon-on.png';
	}
	else if (current.search('icon-off.png') == -1) {
		img.src = 'icon-off.png';
	}
}