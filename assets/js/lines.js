var lines = document.querySelector('.lines');
var l = lines.getContext('2d');

lines.width = window.innerWidth;
lines.height = window.innerHeight;

l.lineWidth =15;
l.strokeStyle = 'rgba(84,215,189,.3)';
//    
//l.beginPath();
//l.moveTo(20,25);
//l.lineTo(750,25);
//l.closePath();
//l.stroke();

// dibuja una segunda línea  MÁS FINA;
l.beginPath();
l.moveTo(800, 200);
l.lineTo(1325, 200);
l.stroke();

// dibuja una tercer línea  MÁS FINA;
l.beginPath();
l.moveTo(30,200);
l.lineTo(350,200);
l.closePath();
l.stroke();

// dibuja una cuarta línea  MÁS FINA;
l.beginPath();
l.moveTo(900, 500);
l.lineTo(1100, 500);
l.stroke();

// dibuja una quinta línea  MÁS FINA;
l.beginPath();
l.moveTo(150,480);
l.lineTo(650,480);
l.closePath();
l.stroke();