$(document).ready(function(){
	setTimeout(function(){
		const url = window.location.search;
		const params = new URLSearchParams(url);
		const instrument = params.get('id');
		
		var titel, bild, beschreibung;
		
		switch (instrument){
			case 'akk':
				titel = "Akkordeon";
				bild = "AKK.png";
				beschreibung = "Beschreibung für ein Akkordeon. Hat Knöpfe und Tasten und macht Krach.";
				break;
			case 'floete':
				titel = "Flöte";
				bild = "flöte.png";
				beschreibung = "Nervt meistens nur.";
				break;
			case 'geige':
				titel = "Geige";
				bild = "Geige.png";
				beschreibung = "Uff.";
				break;
			case 'gitarre':
				titel = "Gitarre";
				bild = "gitarre.png";
				beschreibung = "Ja.";
				break;
			case 'klavier':
				titel = "Klavier";
				bild = "klavier.png";
				beschreibung = "Klafünf.";
				break;
			case 'schlagzeug':
				titel = "Schlagzeug";
				bild = "Schlagzeug.png";
				beschreibung = "Keine Ahnung. Hier ist ein Text für einen Test, ein sogenannter Test-Text.";
				break;
		}
		
		if (titel === undefined || bild === undefined || beschreibung === undefined){
			bild = "logo.png";
			titel = "Fehler";
			beschreibung = "Konnte keine Informationen laden.";
		}
		
		document.getElementById('instrument_titel').innerHTML = titel;
		document.getElementById('instrument_bild').src = 'images/' + bild;
		document.getElementById('instrument_bild').classList.remove('hidden');
		document.getElementById('instrument_beschreibung').innerHTML = beschreibung;
		document.getElementById('instrument_ladebumms').remove();
		document.title = titel + " - Instrumente";
	},300);
});